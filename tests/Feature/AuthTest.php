<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class)->beforeEach(function () {
    // ensure custom middleware aliases are available in tests
    app('router')->aliasMiddleware('role', \App\Http\Middleware\RoleMiddleware::class);
});

it('registers an admin and redirects to admin dashboard', function () {
    $response = $this->post(route('auth.register.submit'), [
        'name' => 'Admin',
        'email' => 'admin2@example.com',
        'password' => 'secret123',
        'password_confirmation' => 'secret123',
        'role' => 'admin',
    ]);

    $response->assertRedirect(route('admin.dashboard'));
    expect(Auth::guard('admin')->check())->toBeTrue();
});

it('logs in a manager and lands on manager dashboard', function () {
    User::factory()->role('manager')->create([
        'email' => 'mgr2@example.com',
        'password' => Hash::make('password'),
    ]);

    $response = $this->post(route('auth.login.submit'), [
        'email' => 'mgr2@example.com',
        'password' => 'password',
    ]);

    $response->assertRedirect(route('manager.dashboard'));
    expect(Auth::guard('manager')->check())->toBeTrue();
});

it('forbids student from admin area', function () {
    $student = User::factory()->role('student')->create();
    $this->actingAs($student, 'student');
    $this->get(route('admin.dashboard'))->assertStatus(403);
});
