<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ApplicantController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\InterviewController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\ProfileController;
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

// Route::middleware('auth')->group(function () {
Route::prefix('admin')->middleware(['auth','admin'])->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('/users', UserController::class);
    Route::resource('/employees', EmployeeController::class);
    Route::resource('/jobs', JobController::class);
    Route::resource('/interviews', InterviewController::class);
    Route::resource('/applicants', ApplicantController::class);

    Route::get('/applicants', [ApplicantController::class, 'index'])->name('applicants');
    Route::get('/delete/application/{application}', [ApplicantController::class, 'destroy'])->name('destroy.applicants');
    Route::get('/call-for-interview/{job}/{applicant}', [InterviewController::class, 'create'])->name('call-for-interview');

    Route::get('employ/{applicant}', [ApplicantController::class, 'hire'])->name('applicant.hire');
    Route::get('reject/{applicant}', [ApplicantController::class, 'reject'])->name('applicant.reject');
});

