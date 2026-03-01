<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function (){
    return view("dashboard");
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::view('/dashboard', 'admin.dashboard.index');
});

Route::middleware(['auth', 'role:manager'])->prefix('manager')->group(function () {
    Route::view('/dashboard', 'manager.dashboard.index');
});

Route::middleware(['auth', 'role:student'])->prefix('student')->group(function () {
    Route::view('/dashboard', 'student.dashboard.index');
});

Route::get("/login", function () {
    return view("auth.login");
})->name("auth.login");

Route::get("/register", function () {
    return view("auth.register");
})->name("auth.register");

