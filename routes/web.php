<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AlumnisController;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\ProgramController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// auth
// registration 
// Route::view('/register', 'auth.registration');
Route::get('/register', [CustomAuthController::class, 'showRegistrationForm']);
Route::post('/register', [CustomAuthController::class, 'register'])->name('register');
// login
Route::view('/login', 'auth.login');
Route::post('/login', [CustomAuthController::class, 'login'])->name('login');
// forget password
Route::get('/forgot-password', [CustomAuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [CustomAuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [CustomAuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [CustomAuthController::class, 'resetPassword'])->name('password.update');




// Route for admin dashboard
Route::get('/admin/dashboard', [CustomAuthController::class, 'admin_dashboard'])->name('admin.dashboard');

// Route for student dashboard
Route::get('/student/dashboard', [CustomAuthController::class, 'student_dashboard'])->name('student.dashboard');
Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');


// alumnis admin side
Route::get('/alumnis', [AlumnisController::class, 'index']);
Route::get('/view-profile', [AlumnisController::class, 'alumnisProfiles']);
Route::get('/get-programs/{departmentId}', [AlumnisController::class, 'getPrograms'])->name('getPrograms');


// departments
Route::get('/departments', [DepartController::class, 'showDepartments']);
Route::post('/delete/{id}', [DepartController::class, 'destroy']);
Route::post('/update-department', [DepartController::class, 'update'])->name('update.department');
Route::post('/add-department', [DepartController::class, 'addDepartment'])->name('add.department');




Route::get('/programs', [ProgramController::class, "show" ]);
Route::post('programs/delete/{id}', [ProgramController::class, 'destroy'])->name('programs.delete');
Route::post('programs/add', [ProgramController::class, 'store'])->name('add.program');






