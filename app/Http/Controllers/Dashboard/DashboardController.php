<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\News;
use App\Models\Question;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil data dari user login
    	$user = auth()->user();
        $usercount = User::count();
        $questioncount = Question::count();
        $newscount = News::count();
        $testimonialcount = Testimonial::count();
        $programcount = Blog::where('category', 'program')->count();
        $blogcount = Blog::where('category', 'blog')->count();

        return view('pages.dashboard.dashboard', [
            'user' => $user,
            'usercount' => $usercount,
            'questioncount' => $questioncount,
            'newscount' => $newscount,
            'testimonialcount' => $testimonialcount,
            'programcount' => $programcount,
            'blogcount' => $blogcount,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(photo $photo)
    {
        //
    }

}
