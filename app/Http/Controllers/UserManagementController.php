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
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;

class UserManagementController extends Controller
{
    // ... CRUD methods ...
    public function showLoginForm()
    {
        return view('auth.login&register');
    }
    public function showRegistrationForm()
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
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')],
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Menetapkan peran super_admin secara otomatis
        $superAdminRole = Role::where('name', 'super_admin')->first(); // Menggunakan query builder
        if ($superAdminRole) {
            $user->roles()->attach($superAdminRole->id);
        }

        return redirect()->route('login')->with('success', 'Registration successful!');
    }

    public function assignRole(User $user, Request $request)
    {
        $role = Role::find($request->input('role_id'));
        if (!$role) {
            return back()->withErrors(['role' => 'Role not found.']);
        }

        $user->roles()->syncWithoutDetaching([$role->id]);

        return redirect()->route('users.show', $user->id)->with('status', 'Role assigned successfully!');
    }
}
