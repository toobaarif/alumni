<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use App\Models\Program;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;


class CustomAuthController extends Controller
{


    public function admin_dashboard()
    {
        if (Auth::check()) {
            return view('admin.admin-dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    public function student_dashboard()
    {
        if (Auth::check()) {
            return view('students.student-dashboard');
        } else {
            return redirect()->route('login');
        }
    }


    public function showRegistrationForm()
    {
        $departments = Department::all();
        $programs = Program::all(); // Fetch all programs from the database
        return view('auth.registration', compact('departments', 'programs'));
    }


    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'graduation_year' => 'required|nullable|date', // Change 'integer' to 'date'
            'department' => 'required|exists:departments,id',
            'program' => 'required|exists:programs,id',
        ]);
    
        // Store the profile picture if provided
        $profilePicturePath = null;
        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile-pictures', 'public');
        }
    
        // Create a new user record
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'graduation_year' => $request->graduation_year,
            'profile_picture' => $profilePicturePath,
            'department_id' => $request->department, // Store department ID
            'program_id' => $request->program, // Store program ID
        ]);
    
        // Log in the user
        auth()->login($user);
    
        // Redirect the user after registration
        return redirect('/basic-information')->with('success', 'Registration successful! Welcome to our platform.');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Debugging credentials
        \Log::info('Login attempt', ['email' => $request->email]);
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            \Log::info('Login successful', ['user_id' => $user->id, 'user_role' => $user->user_role]);
    
            if ($user->user_role == 1) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->user_role == 0) {
                return redirect()->route('student.dashboard');
            }
        } else {
            \Log::info('Login failed', ['credentials' => $credentials]);
        }
    
        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }
    
    

 
public function logout()
{
    Auth::logout();
    return redirect('/login');
}



public function showForgotPasswordForm()
{
    return view('auth.forgot-password');
}

public function sendResetLinkEmail(Request $request)
{
    $request->validate(['email' => 'required|email']);
    
    $status = Password::sendResetLink($request->only('email'));
    
    return $status === Password::RESET_LINK_SENT
                ? back()->with('status', __($status))
                : back()->withErrors(['email' => __($status)]);
}

public function showResetPasswordForm(Request $request, $token)
{
    return view('auth.reset-password', ['token' => $token, 'email' => $request->email]);
}

public function resetPassword(Request $request)
{
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed|min:8',
    ]);

    $status = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($user, $password) {
        $user->password = Hash::make($password);
        $user->save();
        event(new PasswordReset($user));
    });

    return $status == Password::PASSWORD_RESET
                ? redirect('/login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
}

}
