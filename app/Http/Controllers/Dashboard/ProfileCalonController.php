<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\Storage;

use App\Models\ProfileCalon;
use App\Models\Misi;
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
        $misis =  Misi::all();

        return view('pages.dashboard.profile-calon', compact('calon', 'misis'));
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
    $request->validate([
        'nama_calon' => 'required|string|max:255',
        'visi' => 'required|string',
        'misi' => 'required|string',
        'profile' => 'required|string',
        'foto_calon' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $calon = ProfileCalon::findOrFail($request->id);

    if ($request->hasFile('foto_calon')) {
        if ($calon->foto_calon && Storage::exists('public/' . $calon->foto_calon)) {
            Storage::delete('public/' . $calon->foto_calon);
        }


        $imagePath = $request->file('foto_calon')->store('calon_images', 'public');
        $calon->foto_calon = $imagePath;
    }

    $calon->nama_calon = $request->input('nama_calon');
    $calon->visi = $request->input('visi');
    $calon->misi = $request->input('misi');
    $calon->profile = $request->input('profile');

    $calon->save();

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
