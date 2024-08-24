<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    /**
     * Menyimpan data dari form ke tabel questions.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'origin' => 'required|string|max:255',
            'question' => 'required|string|max:1000',
        ]);

        // Simpan data ke database
        Question::create($validated);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pertanyaan Anda telah dikirim.');
    }
}
