<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('berita', compact('berita'));
    }
}
