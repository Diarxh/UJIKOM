<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Grade;
use App\Models\Role;
use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    // ... CRUD methods ...
    public function showLoginForm()
    {
        return view('auth.login&register');
    }

    public function dashboard()
    {
        $data = [
            'total_students' => Student::count(),
            'total_teachers' => Teacher::count(),
            'total_classes' => SchoolClass::count(),
            'total_attendance' => Attendance::count(),
            'total_grades' => Grade::count(),
            'user' => Auth::user(),
        ];

        return view('dashboard.index', $data);
    }

    // Fungsi registrasi
    public function register(Request $request)
    {
        \Log::info('Register Request', $request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:2',
        ]);

        try {
            // Membuat user baru
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Jika berhasil, redirect ke halaman lain
            return response()->json([
                'success' => true,
                'message' => 'Registration successful.',
                'redirect' => route('login'),
            ], 200);
        } catch (\Exception $e) {
            // Jika gagal, kembalikan respons dengan error
            return response()->json([
                'success' => false,
                'message' => 'Registration failed. Please try again.',
            ], 422);
        }
    }

    // Fungsi login
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json([
                'success' => true,
                'message' => 'Login successful.',
                'redirect' => route('dashboard'),
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials.',
        ], 401);
    }

    // public function assignRole(User $user, Request $request)
    // {
    //     $role = Role::find($request->input('role_id'));
    //     if (!$role) {
    //         return back()->withErrors(['role' => 'Role not found.']);
    //     }

    //     $user->roles()->syncWithoutDetaching([$role->id]);

    //     return redirect()->route('users.show', $user->id)->with('status', 'Role assigned successfully!');
    // }
}
