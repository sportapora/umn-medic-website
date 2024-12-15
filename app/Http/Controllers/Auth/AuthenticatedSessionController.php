<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $user = User::where('email', $request->get('email'))->first();

        if (!$user){
            return back()->with('error','incorrect email or password');
        }

        if ($user->is_verified) {
            $request->authenticate();

            $request->session()->regenerate();

            if ($user->hasRole('user'))
                return redirect()->intended(route('home', absolute: false));
            else
                return redirect()->intended(route('dashboard'));
        } else {
            return back()->with('error', 'Anda belum terverifikasi oleh Admin!');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
