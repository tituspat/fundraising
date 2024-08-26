<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use Illuminate\Support\Facades\DB;

class ManageTestimoniController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::with('user')->get();
    	$testimoni = DB::table('testimonials')->count();
    	$testimonipreviewed = DB::table('testimonials')->where('is_previewed', '1')->count();

        return view('pages.dashboard.testimoni', [
        'testimoni' => $testimoni,
        'testimonipreviewed' => $testimonipreviewed,
        'testimonials' => $testimonials,
        ]);
    }


    public function updatePreviewStatus($id)
    {
        // Find the testimonial by its ID
        $testimonial = Testimonial::findOrFail($id);

        // Update the is_previewed column to 1
        $testimonial->is_previewed = 1;
        $testimonial->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Testimonial preview status updated to 1.');
    }

    public function updateUnpreviewStatus($id)
    {
        // Find the testimonial by its ID
        $testimonial = Testimonial::findOrFail($id);

        // Update the is_previewed column to 0
        $testimonial->is_previewed = 0;
        $testimonial->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Testimonial preview status updated to 0.');
    }
}
