<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Buat permissions
        $permissions = [
            'view_dashboard',
            'manage_users',
            'manage_students',
            'manage_teachers',
            'manage_classes',
            'manage_attendance',
            'manage_grades',
            'view_reports',
            'view_own_student_data',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Buat roles
        $superAdmin = Role::create(['name' => 'super_admin']);
        $staff = Role::create(['name' => 'staff_tata_usaha']);
        $teacher = Role::create(['name' => 'guru']);
        $parent = Role::create(['name' => 'orang_tua']);

        // Assign permissions ke roles
        $superAdmin->givePermissionTo(Permission::all());
        $staff->givePermissionTo([
            'view_dashboard',
            'manage_students',
            'manage_teachers',
            'manage_classes',
            'manage_attendance',
            'manage_grades',
            'view_reports',
        ]);
        $teacher->givePermissionTo([
            'view_dashboard',
            'manage_attendance',
            'manage_grades',
            'view_reports',
        ]);
        $parent->givePermissionTo('view_own_student_data');
    }
}
