<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
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
        return view('auth.registration', compact('departments'));
    }


    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'graduation_year' => 'nullable|date', // Change 'integer' to 'date'
            'transcript_no' => 'nullable|integer',
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
            'transcript_no' => $request->transcript_no,
            'profile_picture' => $profilePicturePath,
            'department_id' => $request->department, // Store department ID
            'program_id' => $request->program, // Store program ID
        ]);
    
        // Log in the user
        auth()->login($user);
    
        // Redirect the user after registration
        return redirect('/')->with('success', 'Registration successful! Welcome to our platform.');
    }
    
public function login(Request $request)
{
    // Validate the form data
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt to authenticate the user
    if (Auth::attempt($credentials)) {
        // Authentication successful
        $user = Auth::user();
        if ($user->user_role == 1) {
            // Redirect to admin dashboard
            return redirect()->route('admin.dashboard');
        } elseif ($user->user_role == 0) {
            // Redirect to student dashboard
            return redirect()->route('student.dashboard');
        }
    }

    // Authentication failed
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
