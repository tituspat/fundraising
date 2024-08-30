<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;

class TestimonialController extends Controller
{
    // Hapus middleware auth dari konstruktor
    public function __construct()
    {
        // Hapus atau komentar baris ini jika ingin mengakses tanpa login
        // $this->middleware('auth');
    }

    public function index()
    {
        $testimonials = Testimonial::with('user')->where('is_previewed', 1)->get();
        $userTestimonial = Testimonial::where('user_id', Auth::id())->first();
        $isEditing = false;

        return view('testimoni', compact('testimonials', 'userTestimonial', 'isEditing'));
    }


    public function edit()
    {
        $testimonials = Testimonial::with('user')->get();
        $userTestimonial = Testimonial::where('user_id', Auth::id())->first();
        $isEditing = true;

        return view('testimoni', compact('testimonials', 'userTestimonial', 'isEditing'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'testimonial' => 'required|string|max:500',
        ]);

        $testimonial = Testimonial::findOrFail($id);

        $testimonial->update([
            'testimonial' => $request->input('testimonial'),
            'is_previewed' => false,
        ]);

        return redirect()->route('testimoni')->with('success', 'Testimonial updated successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'testimonial' => 'required|string|max:500',
        ]);

        $userId = Auth::id();
        $userName = Auth::user()->name;

        $existingTestimonial = Testimonial::where('user_id', $userId)->first();

        if ($existingTestimonial) {
            $existingTestimonial->update([
                'testimonial' => $request->input('testimonial'),
                'is_previewed' => false,
            ]);

            return redirect()->route('testimoni')->with('success', 'Testimonial updated successfully.');
        }

        Testimonial::create([
            'user_id' => $userId,
            'name' => $userName,
            'testimonial' => $request->input('testimonial'),
            'is_previewed' => false,
        ]);

        return redirect()->route('testimoni')->with('success', 'Testimonial added successfully.');
    }
}
