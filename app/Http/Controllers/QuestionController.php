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

        
        // $adminEmail = 'tituspat0112@gmail.com'; // Ganti dengan email admin yang sesungguhnya

        // Mail::send([], [], function ($message) use ($validatedData, $adminEmail) {
        //     $message->to($adminEmail)
        //         ->subject('Pesan Baru dari Form Contact Us')
        //         ->text('Nama: ' . $validatedData['name'] . "\n"
        //             . 'Email: ' . $validatedData['email'] . "\n"
        //             . 'No Telp: ' . $validatedData['phone_number'] . "\n"
        //             . 'Asal: ' . $validatedData['origin'] . "\n"
        //             . 'Pesan: ' . $validatedData['question']);
        // });

        // Simpan data ke database
        Question::create($validated);


        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pertanyaan Anda telah dikirim.');
    }
}
