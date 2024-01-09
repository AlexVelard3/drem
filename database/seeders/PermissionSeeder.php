<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    
    public function run(): void
    {
        $permissions = [
            'permission_index', 
            'permission_create', 
            'permission_show', 
            'permission_edit', 
            'permission_destroy',

            'role_index', 
            'role_create', 
            'role_show', 
            'role_edit', 
            'role_destroy',

            'user_index', 
            'user_create', 
            'user_show', 
            'user_edit', 
            'user_destroy',

            'superAdmin_index', 

            'supervisor_index', 

            'administrator_index', 

            'evaluator_index', 

            'register_index',
            'register_edit', 

            'legalSpecialist_index',             
            
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        };
    }
}
