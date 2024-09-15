<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\Storage;

use App\Models\ProfileCalon;
use App\Models\Misi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // if ($calon->foto_calon && Storage::exists('public/' . $calon->foto_calon)) {
        //     Storage::delete('public/' . $calon->foto_calon);
        // }
        
        // Get the uploaded file
        $fotoCalon = $request->file('foto_calon');

        // Generate a unique file name
        $fotoCalonName = time() . '_' . $fotoCalon->getClientOriginalName();

        // Define the destination path
        $destinationPath = public_path('img/profile');

        // Move the file to the destination path
        $fotoCalon->move($destinationPath, $fotoCalonName);

        // Set the relative path for the file
        $imagePath = 'img/profile/' . $fotoCalonName;

        // Update the model with the new image path
        $calon->foto_calon = $imagePath;
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

    /**
     * Remove the specified resource from storage.
     */
    public function misiDelete(string $id)
    {
        //
        Misi::findOrFail($id)->delete();

        return Redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function misiStore()
    {
        //
        // Save to database
        Misi::create([
            'icon'  =>  '<svg class="mx-auto h-[42px] w-[42px] sm:mx-0" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M21 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V3M6 15L10 11L14 15L20 9M20 9V13M20 9H16" stroke="#d32f2f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>',
            'head_misi' => 'Kategori Misi',
            'body_misi' => 'Isi Misi',
        ]);

        Redirect(Auth::user()->role. '/profile-calon');

    }
}
