<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions for Filament Shield resources
        $permissions = [
            // User Management
            'view_user',
            'create_user',
            'edit_user',
            'delete_user',
            
            // Role Management
            'view_role',
            'create_role',
            'edit_role',
            'delete_role',
            
            // Content Management
            'view_page',
            'create_page',
            'edit_page',
            'delete_page',
            
            // Product Management
            'view_product',
            'create_product',
            'edit_product',
            'delete_product',
            
            // Category Management
            'view_category',
            'create_category',
            'edit_category',
            'delete_category',
            
            // Order/Sales Management
            'view_order',
            'create_order',
            'edit_order',
            'delete_order',
            
            // Customer Management
            'view_customer',
            'create_customer',
            'edit_customer',
            'delete_customer',
            
            // Settings
            'view_setting',
            'edit_setting',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                ['name' => $permission, 'guard_name' => 'web'],
                ['name' => $permission, 'guard_name' => 'web']
            );
        }

        // Create roles
        $superAdminRole = Role::firstOrCreate(['name' => 'Super Admin', 'guard_name' => 'web']);
        $contentManagerRole = Role::firstOrCreate(['name' => 'Content Manager', 'guard_name' => 'web']);
        $salesManagerRole = Role::firstOrCreate(['name' => 'Sales Manager', 'guard_name' => 'web']);

        // Assign all permissions to Super Admin
        $superAdminRole->givePermissionTo(Permission::all());

        // Assign content management permissions to Content Manager
        $contentManagerRole->givePermissionTo([
            'view_page', 'create_page', 'edit_page', 'delete_page',
            'view_product', 'create_product', 'edit_product', 'delete_product',
            'view_category', 'create_category', 'edit_category', 'delete_category',
        ]);

        // Assign sales/customer management permissions to Sales Manager
        $salesManagerRole->givePermissionTo([
            'view_order', 'create_order', 'edit_order', 'delete_order',
            'view_customer', 'create_customer', 'edit_customer', 'delete_customer',
            'view_product',
        ]);

        // Create default users
        $superAdmin = User::firstOrCreate(
            ['email' => 'admin@habtomabadimx.com'],
            [
                'name' => 'Super Administrator',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );
        $superAdmin->assignRole('Super Admin');

        $contentManager = User::firstOrCreate(
            ['email' => 'content@habtomabadimx.com'],
            [
                'name' => 'Content Manager',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );
        $contentManager->assignRole('Content Manager');

        $salesManager = User::firstOrCreate(
            ['email' => 'sales@habtomabadimx.com'],
            [
                'name' => 'Sales Manager',
                'password' => Hash::make('password123'),
                'email_verified_at' => now(),
            ]
        );
        $salesManager->assignRole('Sales Manager');
    }
}
