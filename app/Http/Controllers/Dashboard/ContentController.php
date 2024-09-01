<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $content = Content::first();

        return view('pages.dashboard.content-management', ['content' => $content ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $content = Content::findOrFail($request->id);

        // Update the other blog information
        $content->update([
            'jumbotron_title'=>$request->jumbotron_title, 
            'jumbotron_subtitle'=>$request->jumbotron_subtitle, 
            'profile_title'=>$request->profile_title, 
            'program_title'=>$request->program_title, 
            'support_text'=>$request->support_text, 
            'email_title'=>$request->email_title, 
        ]);

        return redirect(Auth::user()->role. '/content');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
