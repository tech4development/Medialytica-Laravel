<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\RoleCreatedMail;
use Illuminate\Support\Facades\Validator;


class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('superadmin');
    }

    public function show()
    {
        // Fetch all users and roles
        $users = User::with('roles')->get();
        $roles = Role::all();
        $permissions = Permission::all();

        return view('superadmin.roles', compact('users', 'roles', 'permissions'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'name' => 'required|string|in:superadmin,admin,editor,user'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the new user
        $user = User::create([
            'name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'user_role' => $request->input('name'),
        ]);

        // Manually create the role entry in the roles table
        $role = Role::firstOrCreate([
            'name' => $request->input('name'),
            // 'guard_name' => 'web',
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Assign the role to the user
        $user->assignRole($role);

        // Send email with password
       // Mail::to($request->input('email'))->send(new RoleCreatedMail($request->input('full_name'), $request->input('email'), $request->input('password')));

        // Redirect to show with the newly created user and role
        return redirect()->route('roles.show')->with('success', 'User created successfully and role assiged successfully.');
    }
    public function createPermission(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'permission_name' => 'required|string|unique:permissions,name'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the new permission
        Permission::create([
            'name' => $request->input('permission_name'),
            'guard_name' => 'web'
        ]);

        // Redirect to show with the newly created permission
        return redirect()->route('roles.show')->with('success', 'Permission created successfully.');
    }

    public function assignPermission(Request $request, $roleId)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'permission_ids' => 'required|array'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the role and assign permissions
        $role = Role::findOrFail($roleId);
        $role->syncPermissions($request->input('permission_ids'));

        // Redirect to show with the updated role
        return redirect()->route('roles.show')->with('success', 'Permissions assigned successfully.');
    }

    public function revokePermission(Request $request, $roleId)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'permission_ids' => 'required|array'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the role and revoke permissions
        $role = Role::findOrFail($roleId);
        $role->revokePermissionTo($request->input('permission_ids'));

        // Redirect to show with the updated role
        return redirect()->route('roles.show')->with('success', 'Permissions revoked successfully.');
    }
}
