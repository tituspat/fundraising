<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaDashboardController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('pages.media.dashboard');
    }
}
