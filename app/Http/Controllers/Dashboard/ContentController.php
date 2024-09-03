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
        $validated = $request->validate([
            'jumbotron_title' => 'required|string',
            'jumbotron_subtitle' => 'required|string',
            'profile_title' => 'required|string',
            'program_title' => 'required|string',
            'support_text' => 'required|string',
            'email_title' => 'required|string',
        ],[
            'jumbotron_title' => 'bagian ini harus diisi',
            'jumbotron_subtitle' => 'bagian ini harus diisi',
            'profile_title' => 'bagian ini harus diisi',
            'program_title' => 'bagian ini harus diisi',
            'support_text' => 'bagian ini harus diisi',
            'email_title' => 'bagian ini harus diisi',
        ]);
        
        $content = Content::findOrFail($request->id);
        
        if ($request->hasFile('image1')) {
            // Delete the old image if necessary
            if ($content->jombotron_img) {
                Storage::disk('public')->delete($content->jombotron_img);
            }
    
            // Store the new image
            $image1 = $request->file('image1');
            $image1Path = $image1->store('landing', 'public');
            $content->jumbotron_img = '/storage/' .$image1Path;
        }

        if ($request->hasFile('logo')) {
            // Delete the old image if necessary
            if ($content->logo) {
                Storage::disk('public')->delete($content->jombotron_img);
            }
    
            // Store the new image
            $image1 = $request->file('image1');
            $image1Path = $image1->store('logo', 'public');
            $content->logo = '/storage/' .$image1Path;
        }

        // Update the other blog information
        $content->update([
            'jumbotron_title'=>$request->jumbotron_title, 
            'jumbotron_subtitle'=>$request->jumbotron_subtitle, 
            'profile_title'=>$request->profile_title, 
            'program_title'=>$request->program_title, 
            'support_text'=>$request->support_text, 
            'email_title'=>$request->email_title, 
            'footer_address'=>$request->footer_address, 
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
