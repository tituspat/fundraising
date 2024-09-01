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
        'profile' => 'required|string',
        'foto_calon' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ],[
        'nama_calon' => 'nama harus diisi',
        'visi' => 'visi harus diisi',
        'profile' => 'profile calon harus diisi',
        // 'foto_calon' => 'password harus diisi',
    ]);

    $calon = ProfileCalon::findOrFail($request->id);
    // $misi = Misi::findOrFail($request->id);
    
    // Update existing missions
    if ($request->has('misi')) {
        foreach ($request->input('misi') as $misiData) {
            $misi = Misi::findOrFail($misiData['id']);
            $misi->update($misiData);
        }
    }


    if ($request->hasFile('foto_calon')) {
        if ($calon->foto_calon && Storage::exists('public/' . $calon->foto_calon)) {
            Storage::delete('public/' . $calon->foto_calon);
        }


        $imagePath = $request->file('foto_calon')->store('calon_images', 'public');
        $calon->foto_calon = '/storage/'.$imagePath;
    }

    $calon->nama_calon = $request->input('nama_calon');
    $calon->visi = $request->input('visi');
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
