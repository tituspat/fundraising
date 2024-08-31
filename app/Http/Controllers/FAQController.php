<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the FAQs.
     */
    public function index()
    {
        // Mengambil semua data FAQ
        $faqs = FAQ::all();

        // Mengirim data FAQ ke view
        return view('faq', compact('faqs'));
    }
}
