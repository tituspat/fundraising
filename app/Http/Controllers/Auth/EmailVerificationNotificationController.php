<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            $url = "";
            if($request->user()->role === "admin"){
                $url = "/admin/dashboard";
            }elseif($request->user()->role === "moderator"){
                $url = "/mod/dashboard";
            }elseif($request->user()->role === "media"){
                $url = "/media/dashboard";
            }else{
                $url = "/";  
            }
    
            return redirect()->intended($url);
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
