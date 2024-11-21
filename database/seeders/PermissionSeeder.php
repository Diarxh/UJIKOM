<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        // Buat daftar permissions
        $permissions = [
            'manage_students',  // CRUD siswa
            'manage_teachers',  // CRUD guru
            'manage_attendance',  // CRUD absensi
            'manage_grades',  // CRUD nilai
            'view_salary_slip',  // Melihat slip gaji
        ];

        // Tambahkan permissions ke database
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Hubungkan permissions ke role
        $superAdmin = Role::firstOrCreate(['name' => 'super_admin']);
        $staffTu = Role::firstOrCreate(['name' => 'staff_tu']);
        $guru = Role::firstOrCreate(['name' => 'guru']);

        // Super Admin mendapatkan semua izin
        $superAdmin->syncPermissions(Permission::all());

        // Staff TU hanya izin tertentu
        $staffTu->syncPermissions([
            'manage_students',
            'manage_teachers',
            'manage_attendance',
            'view_salary_slip',
        ]);

        // Guru hanya izin tertentu
        $guru->syncPermissions([
            'manage_grades',
            'manage_attendance',
        ]);
    }
}
