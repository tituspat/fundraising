<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\ProfileCalon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileCalonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $calon =  ProfileCalon::first();

        return view('pages.dashboard.profile-calon', compact('calon'));
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
    public function show(ProfileCalon $profileCalon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfileCalon $profileCalon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $profileCalon = ProfileCalon::findOrFail($request->id);

        //
        $request->validate([
            'nama_calon' => 'required',
            'visi' => 'required',
            'misi' => 'required', 
            'profile' => 'required', 
        ]);

        // Handle the image upload
        // $imagePath = $request->file('image')->store('gallery_images', 'public');

        // Store the gallery information in the database

        $profileCalon::update([
            'nama_calon' => $request->input('nama'),
            'visi' => $request->input('visi'),
            'misi' => $request->input('misi'),
            'profile' => $request->input('profile'),
        ]);

        return redirect()->back()->with('success', 'profile update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfileCalon $profileCalon)
    {
        //
    }
}
