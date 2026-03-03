<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /** Show login form */
    public function showLogin(Request $request)
    {
        return view('auth.login');
    }

    /** Process login request */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $credentials['email'])->first();
        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }

        $guard = $user->role; // admin|manager|student
        $remember = $request->filled('remember');

        Auth::guard($guard)->login($user, $remember);
        Auth::guard('web')->login($user, $remember);

        $request->session()->regenerate();

        return redirect()->intended(route("{$guard}.dashboard"));
    }

    /** Log out user */
    public function logout(Request $request)
    {
        // determine which guard we're on
        $guard = Auth::getDefaultDriver();
        if (Auth::guard('admin')->check()) {
            $guard = 'admin';
        } elseif (Auth::guard('manager')->check()) {
            $guard = 'manager';
        } elseif (Auth::guard('student')->check()) {
            $guard = 'student';
        }

        Auth::guard($guard)->logout();
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    /** Show registration form */
    public function showRegister()
    {
        return view('auth.register');
    }

    /** Handle registration */
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8'],
            'role' => ['required', 'in:admin,manager,student'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);

        Auth::guard($data['role'])->login($user);
        Auth::guard('web')->login($user);
        $request->session()->regenerate();

        return redirect(route("{$data['role']}.dashboard"));
    }
}
