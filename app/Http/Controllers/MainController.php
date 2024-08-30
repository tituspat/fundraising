<?php

namespace App\Http\Controllers;

use App\Models\ProfileCalon;
use App\Models\Misi;
use App\Models\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data calon
        $calon = ProfileCalon::get()->first();
        $misis = Misi::all();
        $beritas = Berita::latest()->take(3)->get();

        // mengambil data dari table program
    	$blogs = DB::table('blogs')->where('category', '=', "program")->get();

        // mengambil data dari table testimonial
    	$testimonial = DB::table('testimonials')->get();

        return view('index', [
            'blogs' => $blogs,
            'beritas' => $beritas,
            'testimonials' => $testimonial,
            'nama_calon' => $calon->nama_calon,
            'misis' => $misis,
            'profile' => $calon->profile,
            'foto_calon' => $calon->foto_calon,
        ]);

        // return view('index', ['programs'=>$programs, 'testimonials' => $testimonial ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(photo $photo)
    {
        //
    }
}
