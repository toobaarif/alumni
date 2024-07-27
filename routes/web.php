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

// profile
// Route::get('/edit-profile', [ProfileController::class, 'edit']);

 
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
Route::post('/update-program', [ProgramController::class, 'update'])->name('update.program');



 


// add data 
Route::get('/basic-information', [UserDetails::class, 'basicDetails']);
Route::post('/add-details', [UserDetails::class, 'storeDetails'])->name('store.details');

Route::get('/work-experience', [UserDetails::class, 'workExperience']);
Route::post('/work-experience', [UserDetails::class, 'storeWorkExperience'])->name('store.work.experience');

Route::get('/education', [UserDetails::class, 'education']);
Route::post('/store-education', [UserDetails::class, 'storeEducation'])->name('store.education');

Route::get('/profile', [UserDetails::class, 'showUserDetails'])->name('user.details');

// edit of user details
// Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::get('basicInfo/{id}/edit', [UserDetails::class, 'editBasicInfo'])->name('basicInfo.edit');

Route::get('workExperience/{id}/edit', [UserDetails::class, 'editWorkExperience'])->name('workExperience.edit');
Route::post('/experience/store', [UserDetails::class, 'experiencePrifile'])->name('experience.store');

Route::get('educationDetails/{id}/edit', [UserDetails::class, 'editEducationDetails'])->name('educationDetails.edit');
Route::post('/education/store', [UserDetails::class, 'educationProfile'])->name('education.store');


// update 
// Route::put('/basic-info/{id}', 'UserDetails@updateBasicInfo')->name('basicInfo.update');
Route::post('/basic-info/{id}', [UserDetails::class, 'updateBasicInfo'])->name('basicInfo.update');
Route::post('workExperience/{id}', [UserDetails::class, 'updateWorkExperience'])->name('workExperience.update');
Route::post('educationDetails/{id}', [UserDetails::class, 'updateEducationDetails'])->name('educationDetails.update');




// event route 

Route::get('/event-form', [EveController::class, 'showForm']);
Route::post('/events', [EveController::class, 'store'])->name('events.store');
Route::get('/events', [EveController::class, 'index'])->name('events.index');
Route::delete('/events/{id}', [EveController::class, 'destroy'])->name('events.destroy');
Route::get('/events/{id}/edit', [EveController::class, 'edit'])->name('events.edit');
Route::post('/events/{id}/update', [EveController::class, 'update'])->name('events.update');



// Route::get('/event-form', [EveController::class, 'showForm']);
// Route::post('/events', [EveController::class, 'store'])->name('events.store');
// Route::get('/events', [EveController::class, 'index'])->name('events.show');
// Route::delete('/events/{id}', [EveController::class, 'destroy'])->name('events.destroy');

// Route to display the edit form for an event
// Route::get('/events/{id}/edit', [EveController::class, 'edit'])->name('events.edit');

// Route to update an event using POST
// Route::post('/events/{id}/update', [EveController::class, 'update'])->name('events.update');

// donation route
Route::get('/donation', [DonationController::class, 'index']);
Route::post('/donations', [DonationController::class, 'store'])->name('donations.store');
Route::delete('/donations/{donation}', [DonationController::class, 'destroy'])->name('donations.destroy');


// jobs route
Route::get('/jobs', [JobsController::class, 'index']);
Route::post('/jobs', [JobsController::class, 'store'])->name('jobs.store');
Route::delete('/jobs/{job}', [JobsController::class, 'destroy'])->name('jobs.destroy');

