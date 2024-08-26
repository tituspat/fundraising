<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $berita = Berita::where('is_previewed', 1)->get();
        return view('berita', compact('berita'));
    }
}
