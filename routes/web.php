<?php
use App\Http\Controllers\UserDetails;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AlumnisController;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\EveController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CampaignController;



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

Route::get('/about', function () {
    return view('pages.about-us');
});
Route::get('/event', function () {
    return view('pages.event-details');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/event', function () {
    return view('pages.notice');
});
Route::get('/event', function () {
    return view('pages.courses');
});
// Auth Routes
Route::get('/register', [CustomAuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [CustomAuthController::class, 'register'])->name('register');
Route::view('/login', 'auth.login')->name('login.form');
Route::post('/login', [CustomAuthController::class, 'login'])->name('login');
Route::get('/forgot-password', [CustomAuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [CustomAuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [CustomAuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [CustomAuthController::class, 'resetPassword'])->name('password.update');

// Logout Route
Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');

// Admin Dashboard Route
Route::get('/admin/dashboard', [CustomAuthController::class, 'admin_dashboard'])->name('admin.dashboard');

// Student Dashboard Route
Route::get('/student/dashboard', [CustomAuthController::class, 'student_dashboard'])->name('student.dashboard');

// Profile Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserDetails::class, 'showUserDetails'])->name('user.details');
    Route::get('/basic-information', [UserDetails::class, 'basicDetails']);
    Route::post('/add-details', [UserDetails::class, 'storeDetails'])->name('store.details');
    Route::get('/work-experience', [UserDetails::class, 'workExperience']);
    Route::post('/work-experience', [UserDetails::class, 'storeWorkExperience'])->name('store.work.experience');

    
    Route::get('/education', [UserDetails::class, 'education']);
    Route::post('/store-education', [UserDetails::class, 'storeEducation'])->name('store.education');
    Route::get('basicInfo/{id}/edit', [UserDetails::class, 'editBasicInfo'])->name('basicInfo.edit');
    Route::get('workExperience/{id}/edit', [UserDetails::class, 'editWorkExperience'])->name('workExperience.edit');
    Route::post('/experience/store', [UserDetails::class, 'experiencePrifile'])->name('experience.store');
    Route::get('educationDetails/{id}/edit', [UserDetails::class, 'editEducationDetails'])->name('educationDetails.edit');
    Route::post('/education/store', [UserDetails::class, 'educationProfile'])->name('education.store');
    Route::post('/basic-info/{id}', [UserDetails::class, 'updateBasicInfo'])->name('basicInfo.update');
    Route::post('workExperience/{id}', [UserDetails::class, 'updateWorkExperience'])->name('workExperience.update');
    Route::post('educationDetails/{id}', [UserDetails::class, 'updateEducationDetails'])->name('educationDetails.update');
});

// Alumni Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/alumnis', [AlumnisController::class, 'index']);
    Route::get('/view-profile', [AlumnisController::class, 'alumnisProfiles']);
    Route::get('/get-programs/{departmentId}', [AlumnisController::class, 'getPrograms'])->name('getPrograms');
});


// Department Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/departments', [DepartController::class, 'showDepartments']);
    Route::post('/delete/{id}', [DepartController::class, 'destroy']);
    Route::post('/update-department', [DepartController::class, 'update'])->name('update.department');
    Route::post('/add-department', [DepartController::class, 'addDepartment'])->name('add.department');
});

// Program Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/programs', [ProgramController::class, 'show']);
    Route::post('programs/delete/{id}', [ProgramController::class, 'destroy'])->name('programs.delete');
    Route::post('programs/add', [ProgramController::class, 'store'])->name('add.program');
    Route::post('/update-program', [ProgramController::class, 'update'])->name('update.program');
});

// Event Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/event-form', [EveController::class, 'showForm']);
    Route::post('/eventStore', [EveController::class, 'store']);

    Route::get('/events', [EveController::class, 'index'])->name('events.index');
    Route::delete('/events/{id}', [EveController::class, 'destroy'])->name('events.destroy');
    Route::get('/events/{id}/edit', [EveController::class, 'edit'])->name('events.edit');
    Route::post('/events/{id}/update', [EveController::class, 'update'])->name('events.update');
});

// Job Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/jobs', [JobsController::class, 'index']);
    Route::post('/jobs', [JobsController::class, 'store'])->name('jobs.store');
    Route::delete('/jobs/{job}', [JobsController::class, 'destroy'])->name('jobs.destroy');
});

// Donation Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/donations', [DonationController::class, 'index'])->name('donations.index');
    Route::get('/donations/add', [DonationController::class, 'add'])->name('donations.add');
    Route::post('/donations/store', [DonationController::class, 'store'])->name('donations.store');
    
    // New routes for delete, approve, and edit
    Route::delete('/donations/{id}/destroy', [DonationController::class, 'destroy'])->name('donations.destroy');
    Route::post('/donations/{id}/approve', [DonationController::class, 'approve'])->name('donations.approve');
    Route::get('/donations/{id}/edit', [DonationController::class, 'edit'])->name('donations.edit');
    Route::post('/donations/{id}/update', [DonationController::class, 'update'])->name('donations.update');
    

    // // Route::post('/donations', [DonationController::class, 'store'])->name('donations.store');
    // Route::get('/donations/{id}/edit', [DonationController::class, 'edit'])->name('donations.edit');
    // Route::post('/donations/{id}', [DonationController::class, 'update'])->name('donations.update');
    // Route::delete('/donations/{donation}', [DonationController::class, 'destroy'])->name('donations.destroy');
});

Route::get('/get-campaign-details/{id}', [DonationController::class, 'getCampaignDetails']);

// campaign Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/campaign', [CampaignController::class, 'create'])->name('campaign.create');
    Route::post('campaign', [CampaignController::class, 'store']);
    Route::get('/campaign/list', [CampaignController::class, 'index'])->name('campaign.index');

    Route::delete('/campaign/{id}/destroy', [CampaignController::class, 'destroy'])->name('campaign.destroy');

    // Route::post('/delete/{id}', [DepartController::class, 'destroy']);
    // Route::post('/update-department', [DepartController::class, 'update'])->name('update.department');
    // Route::post('/add-department', [DepartController::class, 'addDepartment'])->name('add.department');
});