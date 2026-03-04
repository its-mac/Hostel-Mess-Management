<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HostelController;
use App\Http\Controllers\MessPlanController;
use App\Http\Controllers\RulePolicyController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    if (auth()->check()) {
        $role = auth()->user()->role;
        if (in_array($role, ['admin', 'manager', 'student'])) {
            return redirect()->route($role . '.dashboard');
        }
    }
    return redirect()->route('login');
});

// Admin Routes
Route::middleware(['auth:admin', 'role:admin'])->prefix('admin')->group(function () {
    // Dashboard
    Route::view('/dashboard', 'admin.dashboard.index')->name('admin.dashboard');

    // Setup & Config
    Route::get('/hostels', [HostelController::class, 'index'])->name('hostels.index');
    Route::get('/hostels/create', [HostelController::class, 'create'])->name('hostels.create');
    Route::post('/hostels', [HostelController::class, 'store'])->name('hostels.store');
    Route::get('/hostels/{hostel}', [HostelController::class, 'show'])->name('hostels.show');
    Route::get('/hostels/{hostel}/edit', [HostelController::class, 'edit'])->name('hostels.edit');
    Route::put('/hostels/{hostel}', [HostelController::class, 'update'])->name('hostels.update');
    Route::delete('/hostels/{hostel}', [HostelController::class, 'destroy'])->name('hostels.destroy');
    // Mess Plans
    Route::get('/mess-plans', [MessPlanController::class, 'index'])->name('mess-plans.index');
    Route::get('/mess-plans/create', [MessPlanController::class, 'create'])->name('mess-plans.create');
    Route::post('/mess-plans', [MessPlanController::class, 'store'])->name('mess-plans.store');
    Route::get('/mess-plans/{messPlan}', [MessPlanController::class, 'show'])->name('mess-plans.show');
    Route::get('/mess-plans/{messPlan}/edit', [MessPlanController::class, 'edit'])->name('mess-plans.edit');
    Route::put('/mess-plans/{messPlan}', [MessPlanController::class, 'update'])->name('mess-plans.update');
    Route::delete('/mess-plans/{messPlan}', [MessPlanController::class, 'destroy'])->name('mess-plans.destroy');
    Route::get('/rules-policies', [RulePolicyController::class, 'index'])->name('rules-policies.index');
    Route::get('/rules-policies/create', [RulePolicyController::class, 'create'])->name('rules-policies.create');
    Route::post('/rules-policies', [RulePolicyController::class, 'store'])->name('rules-policies.store');
    Route::get('/rules-policies/{rulePolicy}', [RulePolicyController::class, 'show'])->name('rules-policies.show');
    Route::get('/rules-policies/{rulePolicy}/edit', [RulePolicyController::class, 'edit'])->name('rules-policies.edit');
    Route::put('/rules-policies/{rulePolicy}', [RulePolicyController::class, 'update'])->name('rules-policies.update');
    Route::delete('/rules-policies/{rulePolicy}', [RulePolicyController::class, 'destroy'])->name('rules-policies.destroy');

    // User Management
    Route::get('/managers', [ManagerController::class, 'index'])->name('admin.managers');
    Route::get('/managers/create', [ManagerController::class, 'create'])->name('admin.managers.create');
    Route::post('/managers', [ManagerController::class, 'store'])->name('admin.managers.store');
    Route::get('/managers/{manager}', [ManagerController::class, 'show'])->name('admin.managers.show');
    Route::get('/managers/{manager}/edit', [ManagerController::class, 'edit'])->name('admin.managers.edit');
    Route::put('/managers/{manager}', [ManagerController::class, 'update'])->name('admin.managers.update');
    Route::delete('/managers/{manager}', [ManagerController::class, 'destroy'])->name('admin.managers.destroy');

    Route::get('/students', [StudentController::class, 'index'])->name('admin.students');
    Route::get('/students/create', [StudentController::class, 'create'])->name('admin.students.create');
    Route::post('/students', [StudentController::class, 'store'])->name('admin.students.store');
    Route::get('/students/{student}', [StudentController::class, 'show'])->name('admin.students.show');
    Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('admin.students.edit');
    Route::put('/students/{student}', [StudentController::class, 'update'])->name('admin.students.update');
    Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('admin.students.destroy');

    // Finance & Reports
    Route::view('/revenue', 'admin.revenue.index')->name('admin.revenue');
    Route::view('/pending-payments', 'admin.pending-payments.index')->name('admin.pending-payments');
    Route::view('/collection-tracking', 'admin.collection-tracking.index')->name('admin.collection-tracking');
    Route::view('/reports', 'admin.reports.index')->name('admin.reports');

    // Monitoring
    Route::view('/occupancy-rates', 'admin.occupancy-rates.index')->name('admin.occupancy-rates');
    Route::view('/attendance-trends', 'admin.attendance-trends.index')->name('admin.attendance-trends');
    Route::view('/complaints-stats', 'admin.complaints-stats.index')->name('admin.complaints-stats');
    Route::view('/manager-performance', 'admin.manager-performance.index')->name('admin.manager-performance');
});

// Manager Routes
Route::middleware(['auth:manager', 'role:manager'])->prefix('manager')->group(function () {
    // Dashboard
    Route::view('/dashboard', 'manager.dashboard.index')->name('manager.dashboard');

    // Hostel Management
    Route::view('/room-availability', 'manager.room-availability.index')->name('manager.room-availability');
    Route::view('/assign-rooms', 'manager.assign-rooms.index')->name('manager.assign-rooms');
    Route::view('/room-maintenance', 'manager.room-maintenance.index')->name('manager.room-maintenance');
    Route::view('/checkin-out', 'manager.checkin-out.index')->name('manager.checkin-out');

    // Mess Management
    Route::view('/daily-attendance', 'manager.daily-attendance.index')->name('manager.daily-attendance');
    Route::view('/update-menu', 'manager.update-menu.index')->name('manager.update-menu');
    Route::view('/mess-holidays', 'manager.mess-holidays.index')->name('manager.mess-holidays');

    // Student Approvals
    Route::view('/hostel-applications', 'manager.hostel-applications.index')->name('manager.hostel-applications');
    Route::view('/mess-enrollments', 'manager.mess-enrollments.index')->name('manager.mess-enrollments');
    Route::view('/leave-requests', 'manager.leave-requests.index')->name('manager.leave-requests');
    Route::view('/room-changes', 'manager.room-changes.index')->name('manager.room-changes');

    // Payments & Fines
    Route::view('/verify-payments', 'manager.verify-payments.index')->name('manager.verify-payments');
    Route::view('/generate-invoices', 'manager.generate-invoices.index')->name('manager.generate-invoices');
    Route::view('/apply-fines', 'manager.apply-fines.index')->name('manager.apply-fines');

    // Complaints
    Route::view('/complaints', 'manager.complaints.index')->name('manager.complaints');
});

// Student Routes
Route::middleware(['auth:student', 'role:student'])->prefix('student')->group(function () {
    // Dashboard
    Route::view('/dashboard', 'student.dashboard.index')->name('student.dashboard');

    // My Hostel
    Route::view('/hostel-apply', 'student.hostel-apply.index')->name('student.hostel-apply');
    Route::view('/room-details', 'student.room-details.index')->name('student.room-details');
    Route::view('/apply-leave', 'student.apply-leave.index')->name('student.apply-leave');
    Route::view('/request-room-change', 'student.request-room-change.index')->name('student.request-room-change');

    // My Mess
    Route::view('/enrollment-plan', 'student.enrollment-plan.index')->name('student.enrollment-plan');
    Route::view('/daily-menu', 'student.daily-menu.index')->name('student.daily-menu');
    Route::view('/meal-attendance', 'student.meal-attendance.index')->name('student.meal-attendance');
    Route::view('/pause-service', 'student.pause-service.index')->name('student.pause-service');

    // Payments
    Route::view('/pay-fees', 'student.pay-fees.index')->name('student.pay-fees');
    Route::view('/payment-history', 'student.payment-history.index')->name('student.payment-history');
    Route::view('/my-fines', 'student.my-fines.index')->name('student.my-fines');

    // Support
    Route::view('/notifications', 'student.notifications.index')->name('student.notifications');
    Route::view('/complaints', 'student.complaints.index')->name('student.complaints');
});

// authentication
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
