<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Roles
        $roles = [
            ['name' => 'super_admin'],
            ['name' => 'staff_tata_usaha'],
            ['name' => 'guru'],
            ['name' => 'orang_tua'],
        ];

        // Permissions (Contoh - perlu disesuaikan dengan fitur aplikasi Anda)
        $permissions = [
            ['name' => 'view_dashboard'],
            ['name' => 'manage_users'],
            ['name' => 'manage_students'],
            ['name' => 'manage_teachers'],
            ['name' => 'manage_classes'],
            ['name' => 'manage_attendance'],
            ['name' => 'manage_grades'],
            ['name' => 'view_reports'],
            ['name' => 'view_own_student_data'], // Khusus orang tua
        ];

        // Insert Roles
        Role::insert($roles);

        // Insert Permissions
        Permission::insert($permissions);


        // Assign Permissions to Roles (Contoh - perlu disesuaikan)
        $superAdminRole = Role::where('name', 'super_admin')->first();
        $staffRole = Role::where('name', 'staff_tata_usaha')->first();
        $teacherRole = Role::where('name', 'guru')->first();
        $parentRole = Role::where('name', 'orang_tua')->first();


        $allPermissions = Permission::all();

        $superAdminRole->permissions()->attach($allPermissions);
        $staffRole->permissions()->attach([
            Permission::where('name', 'view_dashboard')->first()->id,
            Permission::where('name', 'manage_students')->first()->id,
            Permission::where('name', 'manage_teachers')->first()->id,
            Permission::where('name', 'manage_classes')->first()->id,
            Permission::where('name', 'manage_attendance')->first()->id,
            Permission::where('name', 'manage_grades')->first()->id,
            Permission::where('name', 'view_reports')->first()->id,
        ]);
        $teacherRole->permissions()->attach([
            Permission::where('name', 'view_dashboard')->first()->id,
            Permission::where('name', 'manage_attendance')->first()->id,
            Permission::where('name', 'manage_grades')->first()->id,
            Permission::where('name', 'view_reports')->first()->id,
        ]);
        $parentRole->permissions()->attach([Permission::where('name', 'view_own_student_data')->first()->id]);

    }
}
