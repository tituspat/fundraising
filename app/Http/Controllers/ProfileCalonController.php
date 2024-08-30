<?php

namespace App\Http\Controllers;

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
        // Ambil data calon dari database (misalkan hanya ada satu calon)
        $calon = ProfileCalon::first();

        // Pisahkan misi menjadi array berdasarkan tanda ";"
        $misiArray = explode(';', $calon->misi);

        // Kirim data ke view
        return view('calon.profile', [
            'nama_calon' => $calon->nama_calon,
            'visi' => $calon->visi,
            'misi' => $misiArray,
            'profile' => $calon->profile,
            'created_at' => $calon->created_at,
            'updated_at' => $calon->updated_at,
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
    public function update(Request $request, ProfileCalon $profileCalon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfileCalon $profileCalon)
    {
        //
    }
}
