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
use App\Models\PermissionRole;
use Illuminate\Support\Facades\Validator;


class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('superadmin');
    }

    public function show()
    {
        // Fetch all users, roles, and permissions
        $users = User::with('roles')->get();
        $roles = Role::all();
        $permissions = Permission::all();

        return view('superadmin.roles', compact('users', 'roles', 'permissions'));
    }

    public function storeUser(Request $request)
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
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Assign the role to the user
        $user->assignRole($role);

        // Redirect to show with the newly created user and role
        return redirect()->route('roles.show')->with('success', 'User created and role assigned successfully.');
    }

    public function storePermission(Request $request)
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
        return redirect()->route('permissions.show')->with('success', 'Permission created successfully.');
    }

    public function showPermissions()
    {
        // Retrieve all permissions
        $permissions = Permission::all();

        // Return the view with permissions
        return view('superadmin.permissions', compact('permissions'));
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

        // Find the role
        $role = Role::findOrFail($roleId);

        // Sync the permissions without additional fields
        $role->permissions()->sync($request->input('permission_ids'));

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
        $role->permissions()->detach($request->input('permission_ids'));

        // Redirect to show with the updated role
        return redirect()->route('roles.show')->with('success', 'Permissions revoked successfully.');
    }

    public function assignPermissionsForm($roleId)
    {
        $role = Role::findOrFail($roleId);
        $permissions = Permission::all();

        return view('superadmin.assign_permissions', compact('role', 'permissions'));
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('roles.show')->with('success', 'Role deleted successfully.');
    }



    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|string|max:255',
        ]);

        $order->status = $request->status;
        $order->save();

        return redirect()->route('orders.index')->with('success', 'Order status updated successfully.');
    }
}

