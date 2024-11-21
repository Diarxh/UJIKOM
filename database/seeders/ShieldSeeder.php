<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ShieldSeeder extends Seeder
{
    public function run()
    {
        // $this->call(ShieldSeeder::class);
        // Buat Role
        $superAdmin = Role::firstOrCreate(['name' => 'super_admin']);
        $staffTu = Role::firstOrCreate(['name' => 'staff_tu']);
        $guru = Role::firstOrCreate(['name' => 'guru']);

        // Buat Permissions
        $permissions = [
            'view_students',
            'create_students',
            'update_students',
            'delete_students',
            'view_grades',
            'create_grades',
            'update_grades',
            'view_attendances',
            'update_attendances',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assign Permissions
        $superAdmin->givePermissionTo(Permission::all());
        $staffTu->givePermissionTo(['view_students', 'create_students', 'update_students', 'delete_students']);
        $guru->givePermissionTo(['view_grades', 'create_grades', 'update_grades', 'view_attendances', 'update_attendances']);
    }
}
