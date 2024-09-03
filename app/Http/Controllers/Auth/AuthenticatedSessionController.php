<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
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
        $status = "public";

        return view('auth.login', compact('status'));
    }

    /**
     * Display the login view.
     */
    public function create_timses(): View
    {
        $status = "timses";
        return view('auth.login', compact('status'));
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $url = "/member/dashboard";

        return redirect()->intended($url);
    }

    public function store_timses(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $url = "";
        if($request->user()->role === "admin"){
            $url = "/admin/dashboard";
        }elseif($request->user()->role === "moderator"){
            $url = "/mod/dashboard";
        }elseif($request->user()->role === "media"){
            $url = "/media/dashboard";
        }else{
            $url = "/member/dashboard";  
        }
        
        return redirect()->intended($url);
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
