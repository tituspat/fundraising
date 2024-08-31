<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //
        // $program = Blog::where('category', '=', 'program');

        $program = Blog::where('category', "=", "program")->where("is_previewed", "=", true)->get();

        return view('program', compact('program'));

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
    public function show(Blog $program)
    {
        $program = Blog::findOrFail($program->id);

        $relatedPrograms = Blog::where('category', 'program')
            ->where('id', '!=', $program->id)
            ->get();

        return view('program-details', compact('program', 'relatedPrograms'));
    }
}
