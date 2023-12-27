<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterAdopterController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterOrphanController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ViewUsersController;
use App\Models\User;
use App\Models\Orphan_information;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\HealthController;
use App\Models\Application;
use App\Http\Controllers\ShowAdopterController;
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
    return view('aboutUs');
});

//redirect to the registration page
Route::get('register_adopter', [RegisterAdopterController::class, 'index'])->middleware('guest');
//handles storing the information in the database and logging in the new user
Route::post('register_adopter', [RegisterAdopterController::class, 'create'])->middleware('guest');
//logging out
Route::get('orphan_dashboard', [DashboardController::class, 'orphan'])->middleware('auth');
Route::post('logout', [LogOutController::class, 'logout'])->middleware('auth');
//to redirect to respective dashboards
Route::get('manager_dashboard', [DashboardController::class, 'manager'])->middleware('auth');
Route::get('adopter_dashboard', [DashboardController::class, 'adopter'])->middleware('auth');
//logging in
Route::get('login', [LoginController::class, 'index'])->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest');
//registering a new orphan
Route::get('register_orphan', [RegisterOrphanController::class, 'index'])->middleware('auth');
Route::post('register_orphan', [RegisterOrphanController::class, 'create'])->middleware('auth');
//for attendance
Route::get('attendance', [AttendanceController::class, 'redirect'])->middleware('auth');
Route::post('attendance', [AttendanceController::class, 'index'])->middleware('auth');
Route::post('mark_attendance', [AttendanceController::class, 'store'])->middleware('auth');
Route::post('change_attendance', [AttendanceController::class, 'change'])->middleware('auth');
//to view all the users
Route::get('view_users', [ViewUsersController::class, 'index'])->middleware('auth'); //show a list of all the users
//view a particular adopter
Route::get('show_adopter/{show_adopter}', [ShowAdopterController::class, 'index'])->middleware('auth');


//view a particular adopter
// Route::get('show_children/{show_adopter}', function($id) //show a particular adopter based on id
// {
//     return view('one_student', [
//         'user' => User::findorFail($id)
//     ]);
// });
//adoption requests are handled here
Route::get('adoption_request', [AdoptionController::class, 'index'])->middleware('auth');
Route::post('adoption_request', [AdoptionController::class, 'store'])->middleware('auth');
//for manager to view pending applications
Route::get('view_applications', function () {
    return view('view_applications', [
        'applications' => Application::all()
    ]);
});

Route::get('process_request/{user_id}', function ($id) {
    return view('process', [
        'user' => Application::findorFail($id)
    ]);
});
Route::post('application_processed', [AdoptionController::class, 'storeReply'])->middleware('auth');

Route::get('track_request', [AdoptionController::class, 'request'])->middleware('auth');
Route::get('health', [HealthController::class, 'index'])->middleware('auth');
Route::get('update_health/{user_id}', function ($id) {
    return view('update_health', [
        'user' => Orphan_information::findorFail($id)
    ]);
})->middleware('auth');

Route::post('new_record', [HealthController::class, 'store'])->middleware('auth');
Route::post('treatment_date', [HealthController::class, 'treatment'])->middleware('auth');
