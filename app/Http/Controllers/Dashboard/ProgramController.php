<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $programs = Blog::all();
        return view('pages.dashboard.program',  compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $isEditing = false;

        return view('pages.dashboard.form-program', compact('isEditing'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required',
            'image' => 'required',
        ],[
            'title' => 'Judul harus diisi',
            'content' => 'Konten harus diisi',
        ]);

        $imagePath = $request->hasFile('image') ? $request->file('image')->store('program_images', 'public') : null;
        $imagePath = '/storage/' . $imagePath;

        $content = $validated['content']; // Ambil konten dari request

        // Crawler untuk menelusuri konten HTML
        $crawler = new Crawler($content);

        // Temukan semua elemen gambar (img) yang memiliki atribut src dengan base64
        $crawler->filter('img')->each(function (Crawler $node) use (&$content) {
            $src = $node->attr('src');

            // Jika src adalah base64
            if (preg_match('/^data:image\/(\w+);base64,/', $src, $type)) {
                // Decode base64
                $imageData = base64_decode(substr($src, strpos($src, ',') + 1));
                $type = strtolower($type[1]); // jpg, png, gif, etc.

                // Buat nama file unik
                $fileName = Str::random(10) . '.' . $type;

                // Simpan gambar ke storage
                $filePath = 'public/program_images/' . $fileName;
                Storage::put($filePath, $imageData);

                // Ganti base64 src di konten dengan URL gambar yang disimpan
                $content = str_replace($src, Storage::url($filePath), $content);
            }
        });


        // Save to database
        Blog::create([
            'title' => $validated['title'],
            'content' => $content,
            'thumbnail' => $imagePath,
            'category' => "program",
            'category_id' => "2",
            'profile_calon_id' => "1",
        ]);

        return Redirect(Auth::user()->role. '/program')->with('success', 'Content saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $program = Blog::findOrFail($id);
        return view('pages.dashboard.program-detail',  compact('program'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $program = Blog::findOrFail($id);
        $isEditing = true;

        return view('pages.dashboard.form-program', compact('isEditing', 'program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $program = Blog::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required',
        ]);

        $imagePath = $request->hasFile('image') ? $request->file('image')->store('program_images', 'public') : null;
        $imagePath = '/storage/' . $imagePath;

        $content = $validated['content']; // Ambil konten dari request

        // Crawler untuk menelusuri konten HTML
        $crawler = new Crawler($content);

        // Temukan semua elemen gambar (img) yang memiliki atribut src dengan base64
        $crawler->filter('img')->each(function (Crawler $node) use (&$content) {
            $src = $node->attr('src');

            // Jika src adalah base64
            if (preg_match('/^data:image\/(\w+);base64,/', $src, $type)) {
                // Decode base64
                $imageData = base64_decode(substr($src, strpos($src, ',') + 1));
                $type = strtolower($type[1]); // jpg, png, gif, etc.

                // Buat nama file unik
                $fileName = Str::random(10) . '.' . $type;

                // Simpan gambar ke storage
                $filePath = 'public/program_images/' . $fileName;
                Storage::put($filePath, $imageData);

                // Ganti base64 src di konten dengan URL gambar yang disimpan
                $content = str_replace($src, Storage::url($filePath), $content);
            }
        });
        // Update the other blog information
        $program->update([
            'title' => $request->title,
            'meta_desc' => $request->meta_desc,
            'content' => $content,
            'thumbnail' => $imagePath,
            'category' => "program",
            'category_id' => "2",
            // 'created_by' => $request->creator,
            ]);
        // Atur is_previewed menjadi false
        $program->is_previewed = false;
        $program->save();

            return redirect(Auth::user()->role. '/program')
                             ->with('success', 'Program updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        //get program by ID
        Blog::findOrFail($id)->delete();
        //redirect to
        return redirect(Auth::user()->role. '/program')->with('success', 'Data Berhasil Dihapus!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function toggleVisibility(string $id)
    {

        //get user by ID
        $blog = Blog::findOrFail($id);

        $blog->is_previewed = !$blog->is_previewed;
        $blog->save();

        //redirect to
        return redirect()->back()->with('success', 'changed');
    }
}
