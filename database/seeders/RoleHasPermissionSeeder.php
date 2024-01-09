<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck("id"));

        // User
        $user_permissions = $admin_permissions->filter(function ($permission) {
            return 
            substr($permission->name,0,11) !== 'superAdmin_' &&
            substr($permission->name,0,5) !== 'managed_' &&
            substr($permission->name,0,5) !== 'role_' &&
            substr($permission->name,0,11) !== 'permission_' &&
            substr($permission->name,0,11) !== 'supervisor_' &&
            substr($permission->name,0,14) !== 'administrator_' &&
            substr($permission->name,0,10) !== 'evaluator_' &&
            substr($permission->name,0,9) !== 'register_' &&
            substr($permission->name,0,16) !== 'legalSpecialist_';
        });    

        $supervisor_permissions = $admin_permissions->filter(function ($permission) {
            return 
            substr($permission->name,0,11) !== 'superAdmin_' &&
            substr($permission->name,0,5) !== 'user_' &&
            substr($permission->name,0,5) !== 'role_' &&
            substr($permission->name,0,11) !== 'permission_' &&
            substr($permission->name,0,11) == 'supervisor_' &&
            substr($permission->name,0,14) !== 'administrator_' &&
            substr($permission->name,0,10) !== 'evaluator_' &&
            substr($permission->name,0,9) !== 'register_' &&
            substr($permission->name,0,16) !== 'legalSpecialist_';
        });  

        $administrator_permissions = $admin_permissions->filter(function ($permission) {
            return 
            substr($permission->name,0,11) !== 'superAdmin_' &&
            substr($permission->name,0,5) !== 'user_' &&
            substr($permission->name,0,5) !== 'role_' &&
            substr($permission->name,0,11) !== 'permission_' &&
            substr($permission->name,0,11) !== 'supervisor_' &&
            substr($permission->name,0,14) == 'administrator_' &&
            substr($permission->name,0,10) !== 'evaluator_' &&
            substr($permission->name,0,9) !== 'register_' &&
            substr($permission->name,0,16) !== 'legalSpecialist_';
        });  

        $evaluator_permissions = $admin_permissions->filter(function ($permission) {
            return 
            substr($permission->name,0,11) !== 'superAdmin_' &&
            substr($permission->name,0,5) !== 'user_' &&
            substr($permission->name,0,5) !== 'role_' &&
            substr($permission->name,0,11) !== 'permission_' &&
            substr($permission->name,0,11) !== 'supervisor_' &&
            substr($permission->name,0,14) !== 'administrator_' &&
            substr($permission->name,0,10) == 'evaluator_' &&
            substr($permission->name,0,9) !== 'register_' &&
            substr($permission->name,0,16) !== 'legalSpecialist_';
        }); 

        $register_permissions = $admin_permissions->filter(function ($permission) {
            return 
            substr($permission->name,0,11) !== 'superAdmin_' &&
            substr($permission->name,0,5) !== 'user_' &&
            substr($permission->name,0,5) !== 'role_' &&
            substr($permission->name,0,11) !== 'permission_' &&
            substr($permission->name,0,11) !== 'supervisor_' &&
            substr($permission->name,0,14) !== 'administrator_' &&
            substr($permission->name,0,10) !== 'evaluator_' &&
            substr($permission->name,0,9) == 'register_' &&
            substr($permission->name,0,16) !== 'legalSpecialist_';
        });  

        $legalSpecialist_permissions = $admin_permissions->filter(function ($permission) {
            return 
            substr($permission->name,0,11) !== 'superAdmin_' &&
            substr($permission->name,0,5) !== 'user_' &&
            substr($permission->name,0,5) !== 'role_' &&
            substr($permission->name,0,11) !== 'permission_' &&
            substr($permission->name,0,11) !== 'supervisor_' &&
            substr($permission->name,0,14) !== 'administrator_' &&
            substr($permission->name,0,10) !== 'evaluator_' &&
            substr($permission->name,0,9) !== 'register_' &&
            substr($permission->name,0,16) == 'legalSpecialist_';
        }); 

        Role::findOrFail(2)->permissions()->sync($user_permissions);
        Role::findOrFail(3)->permissions()->sync($supervisor_permissions);
        Role::findOrFail(4)->permissions()->sync($administrator_permissions);
        Role::findOrFail(5)->permissions()->sync($evaluator_permissions);
        Role::findOrFail(6)->permissions()->sync($register_permissions);
        Role::findOrFail(7)->permissions()->sync($legalSpecialist_permissions);

    }
}
