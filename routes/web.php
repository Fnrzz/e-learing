<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'create'])->name('register');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/course/{course:slug}', [DashboardController::class, 'detail']);
    Route::get('/dashboard/videos', [DashboardController::class, 'videos'])->name('videos');
    Route::get('/dashboard/video/{course:slug}', [DashboardController::class, 'detail']);
});

Route::middleware('auth', 'admin')->group(function () {
    Route::post('/create-course', [CourseController::class, 'store'])->name('createCourse');
    Route::post('/update-course/{course:slug}', [CourseController::class, 'update'])->name('updateCourse');
    Route::get('/dashboard/delete-video/{course:slug}', [CourseController::class, 'delete']);
    Route::get('/create-course/checkslug', [CourseController::class, 'checkSlug']);
});
