<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobSeekerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

Route::group(['prefix' => 'job-seeker', 'as' => 'jobSeeker.', 'middleware' => ['check_auth:job_seeker']], function () {
    Route::get('/profile', [JobSeekerController::class, 'profile'])->name('profile');
    Route::get('/appointments', [JobSeekerController::class, 'appointments'])->name('appointments');
});

Route::group(['prefix' => 'consultant', 'as' => 'consultant.', 'middleware' => ['check_auth:consultant']], function () {
    Route::get('/profile', [ConsultantController::class, 'profile'])->name('profile');
    Route::get('/appointments', [ConsultantController::class, 'appointments'])->name('appointments');
});
