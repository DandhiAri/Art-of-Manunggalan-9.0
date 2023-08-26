<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPresenceController;
use App\Http\Controllers\AdminSettingsController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminSponsorshipsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/test', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/',[WelcomeController::class, 'test'])->name('welcome');

// admin here
Route::prefix('admin')
    // ->middleware(['auth','is_admin','verified'])
    ->group(function () {

        // dashboard
        Route::get('dashboard/{role?}', AdminDashboardController::class)->name('admin.dashboard');
        // Route::get('/{role?}', AdminDashboardController::class)->name('admin.dashboard');

        // users 
        Route::get('users/{role}', [AdminUsersController::class, 'index'])->name('admin.users');

        Route::post('users/{user}', [AdminUsersController::class, 'confirm'])->name('admin.users.confirm');

        // presence
        Route::get('presence/{role}', [AdminPresenceController::class, 'index'])->name('admin.presence');
        Route::post('presence/{role}', [AdminPresenceController::class, 'presence'])->name('admin.presence.presenced');

        // settings
        Route::get('settings', [AdminSettingsController::class, 'index'])->name('admin.settings');
        Route::put('settings/{setting}', [AdminSettingsController::class, 'update'])->name('admin.settings.update');

        // sponsors
        Route::get('sponsorship', [AdminSponsorshipsController::class, 'index'])->name('admin.sponsorship');
        Route::post('sponsorship/store', [AdminSponsorshipsController::class, 'store'])->name('admin.sponsorship.store');
        Route::get('sponsorship/edit/{id}', [AdminSponsorshipsController::class, 'edit'])->name('admin.sponsorship.edit');
        Route::get('sponsorship/destroy/{id}', [AdminSponsorshipsController::class, 'destroy'])->name('admin.sponsorship.destroy');
    });

// auth
Auth::routes(['verify' => true]);

// user here
Route::prefix('/')
    ->middleware(['auth', 'is_user', 'verified'])
    ->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::post('payment/{id}', [HomeController::class, 'payment'])->name('payment');
});

    
