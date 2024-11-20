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
