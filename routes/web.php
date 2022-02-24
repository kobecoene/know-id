<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BadgeController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index']);
Route::get('/info', [PageController::class, 'preregister'])->name('info');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/algemene_voorwaarden', [PageController::class, 'terms'])->name('terms');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// User related pages
Route::prefix('user')->middleware('auth')->name('user.')->group(function () {
    Route::get('profile', Profile::class)->name('profile');
});

Route::prefix('dashboard')->middleware('auth')->name('dashboard.')->group(function () {
   Route::get('home', [DashboardController::class, 'index'])->name('home');
   Route::get('projects', [DashboardController::class, 'projects'])->name('projects');
   Route::get('badges', [DashboardController::class, 'badges'])->name('badges');
   Route::get('projectsOverview', [DashboardController::class, 'projectsOverview'])->name('projectsOverview');
});

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'auth.isAdmin'])->name('admin.')->group(function () {
    Route::resource('/users', UserController::class);
    Route::resource('/badges', BadgeController::class);
    Route::resource('/projects', ProjectController::class);
});
