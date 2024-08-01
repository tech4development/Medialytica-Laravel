<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Create roles
          $superadminRole = Role::create(['name' => 'superadmin']);
          $adminRole = Role::create(['name' => 'admin']);
          $editorRole = Role::create(['name' => 'editor']);
          $userRole = Role::create(['name' => 'user']);

          // Create permissions
          $viewAnyDashboard = Permission::create(['name' => 'view any dashboard']);
          $manageUsers = Permission::create(['name' => 'manage users']);
          $editContent = Permission::create(['name' => 'edit content']);
          $viewContent = Permission::create(['name' => 'view content']);

          // Assign permissions to roles
          $superadminRole->givePermissionTo([
              $viewAnyDashboard,
              $manageUsers,
              $editContent,
              $viewContent,
          ]);

          $adminRole->givePermissionTo([
              $manageUsers,
              $editContent,
              $viewContent,
          ]);

          $editorRole->givePermissionTo([
              $editContent,
              $viewContent,
          ]);

          $userRole->givePermissionTo($viewContent);
      }
    }
