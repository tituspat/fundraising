<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
 

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $galleries = Gallery::all();

        return view('pages.dashboard.gallery',  compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('pages.dashboard.form-gallery');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle the image upload
        $imagePath = $request->file('image')->store('gallery_images', 'public');

        // Store the gallery information in the database
        Gallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'url' => $imagePath,
        ]);

        return redirect(Auth::user()->role. '/gallery')
                         ->with('success', 'Gallery created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $gallery = Gallery::findOrFail($id);
        $isEditing = false; // Set $isEditing to true
        return view('pages.dashboard.gallery-detail',  compact('gallery', 'isEditing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        $gallery = Gallery::findOrFail($id);
        $isEditing = true; // Set $isEditing to true
        return view('pages.dashboard.gallery-detail',  compact('gallery', 'isEditing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $gallery = Gallery::findOrFail($request->id);

        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        
        $fileToDelete = 'file.txt'; // Tentukan file yang ingin dihapus

        // Handle the image upload
        $imagePath = $request->file('image')->store('gallery_images', 'public');
    
        // Update the other gallery information
        $gallery->update([
        'title' => $request->title,
        'description' => $request->description,
        'url' => $imagePath
    ]);
    
        return redirect(Auth::user()->role. '/gallery')
                         ->with('success', 'Gallery created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
