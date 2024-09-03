<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the FAQs.
     */
    public function index()
    {
        // Mengambil semua data FAQ
        $faqs = Faq::all();

        // Mengirim data FAQ ke view
        return view('faq', compact('faqs'));
    }
}
