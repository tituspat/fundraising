<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\Storage;

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

    public function update(Request $request)
    {
        // Validate the input data
        $request->validate([
            'nama_calon' => 'required|string|max:255',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'profile' => 'required|string',
            'foto_calon' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Find the calon record by ID
        $calon = ProfileCalon::findOrFail($request->id);

        // Update the calon record
        $calon->nama_calon = $request->input('nama_calon');
        $calon->visi = $request->input('visi');
        $calon->misi = $request->input('misi');
        $calon->profile = $request->input('profile');

        // Handle file upload if a new file is provided
        if ($request->hasFile('foto_calon')) {
            // Delete old file if it exists
            if ($calon->foto_calon && Storage::exists('img/' . $calon->foto_calon)) {
                Storage::delete('img/' . $calon->foto_calon);
            }

            // Store new file
            $file = $request->file('foto_calon');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('img', $filename);

            // Update file name in the database
            $calon->foto_calon = $filename;
        }

        // Save changes to the database
        $calon->save();

        // Redirect with success message
        return redirect()->back()->with('success', 'Profile calon berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfileCalon $profileCalon)
    {
        //
    }
}
