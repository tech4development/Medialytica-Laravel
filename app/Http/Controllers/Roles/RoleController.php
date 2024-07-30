<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('superadmin');
    }

    public function assignRole(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $role = $request->input('role');

        if (in_array($role, ['admin', 'editor', 'user'])) {
            $user->syncRoles($role);
            $this->assignPermissionsToRole($role);
            return redirect()->back()->with('success', 'Role and permissions assigned successfully.');
        }

        return redirect()->back()->with('error', 'Invalid role.');
    }

    public function createRole(Request $request)
    {
        $roleName = $request->input('role_name');

        if (!$roleName || Role::where('name', $roleName)->exists()) {
            return redirect()->back()->with('error', 'Invalid or existing role name.');
        }

        Role::create(['name' => $roleName]);
        return redirect()->back()->with('success', 'Role created successfully.');
    }

    public function assignPermissions(Request $request, $roleName)
    {
        $role = Role::where('name', $roleName)->first();

        if (!$role) {
            return redirect()->back()->with('error', 'Role does not exist.');
        }

        $permissions = $request->input('permissions', []);
        $role->syncPermissions($permissions);

        return redirect()->back()->with('success', 'Permissions assigned successfully.');
    }

    public function createPermission(Request $request)
    {
        $permissionName = $request->input('permission_name');

        if (!$permissionName || Permission::where('name', $permissionName)->exists()) {
            return redirect()->back()->with('error', 'Invalid or existing permission name.');
        }

        Permission::create(['name' => $permissionName]);
        return redirect()->back()->with('success', 'Permission created successfully.');
    }

    private function assignPermissionsToRole($roleName)
    {
        $role = Role::where('name', $roleName)->first();

        if (!$role) {
            return;
        }

        $permissions = [];

        switch ($roleName) {
            case 'admin':
                $permissions = ['manage users', 'edit content', 'view content'];
                break;
            case 'editor':
                $permissions = ['edit content', 'view content'];
                break;
            case 'user':
                $permissions = ['view content'];
                break;
        }

        $role->syncPermissions($permissions);
    }

    public function showRoles()
    {
        $permissions = Permission::all(); // Fetch all permissions
        $user = User::first(); // Example to get a user; adjust as needed

        return view('superadmin.roles', compact('permissions', 'user'));
    }
}
