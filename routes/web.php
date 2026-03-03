<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    if (auth()->check()) {
        $role = auth()->user()->role;
        if (in_array($role, ['admin', 'manager', 'student'])) {
            return redirect()->route($role . '.dashboard');
        }
    }
    return redirect()->route('login');
});

// secured areas per role
Route::middleware(['auth:admin', 'role:admin'])->prefix('admin')->group(function () {
    Route::view('/dashboard', 'admin.dashboard.index')->name('admin.dashboard');
});

Route::middleware(['auth:manager', 'role:manager'])->prefix('manager')->group(function () {
    Route::view('/dashboard', 'manager.dashboard.index')->name('manager.dashboard');
});

Route::middleware(['auth:student', 'role:student'])->prefix('student')->group(function () {
    Route::view('/dashboard', 'student.dashboard.index')->name('student.dashboard');
});

// authentication
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
