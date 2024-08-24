<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        // Ambil semua testimonial dengan relasi user
        $testimonials = Testimonial::with('user')->get();

        // Ambil testimonial pengguna yang sedang login
        $userTestimonial = Testimonial::where('user_id', Auth::id())->first();

        // Flag untuk mengatur mode edit
        $isEditing = false;

        // Kirim data ke view
        return view('testimoni', compact('testimonials', 'userTestimonial', 'isEditing'));
    }

    public function edit()
    {
        // Ambil semua testimonial dengan relasi user
        $testimonials = Testimonial::with('user')->get();

        // Ambil testimonial pengguna yang sedang login
        $userTestimonial = Testimonial::where('user_id', Auth::id())->first();

        // Flag untuk mengatur mode edit
        $isEditing = true;

        // Kirim data ke view dengan mode edit
        return view('testimoni', compact('testimonials', 'userTestimonial', 'isEditing'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'testimonial' => 'required|string|max:500',
        ]);

        // Temukan testimonial yang akan diperbarui
        $testimonial = Testimonial::findOrFail($id);

        // Perbarui testimonial
        $testimonial->update([
            'testimonial' => $request->input('testimonial'),
            'is_previewed' => false,
        ]);

        // Redirect kembali ke halaman testimoni
        return redirect()->route('admin.testimoni')->with('success', 'Testimonial updated successfully.');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'testimonial' => 'required|string|max:500',
        ]);

        // Ambil ID pengguna yang sedang login
        $userId = Auth::id();
        $userName = Auth::user()->name;

        // Check if user already has a testimonial
        $existingTestimonial = Testimonial::where('user_id', $userId)->first();

        if ($existingTestimonial) {
            // Update existing testimonial
            $existingTestimonial->update([
                'testimonial' => $request->input('testimonial'),
                'is_previewed' => false,
            ]);

            return redirect()->route('testimoni')->with('success', 'Testimonial updated successfully.');
        }

        // Create new testimonial
        Testimonial::create([
            'user_id' => $userId,
            'name' => $userName,
            'testimonial' => $request->input('testimonial'),
            'is_previewed' => false,
        ]);

        // Redirect kembali ke halaman testimoni
        return redirect()->route('admin.testimoni')->with('success', 'Testimonial added successfully.');
    }
}
