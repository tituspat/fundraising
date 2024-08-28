<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = Blog::all();

        return view('pages.dashboard.blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $isEditing = false;

        return view('pages.dashboard.form-blog', compact('isEditing'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required',
            'creator' => 'required',
        ]);
    
        $content = $request->input('content'); // Ambil konten dari request
        
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
                $filePath = 'public/blog_images/' . $fileName;
                Storage::put($filePath, $imageData);

                // Ganti base64 src di konten dengan URL gambar yang disimpan
                $content = str_replace($src, Storage::url($filePath), $content);
            }
        });

        // Gunakan DomCrawler untuk mengekstrak gambar pertama
        $crawler = new Crawler($content);
            // Check if the image exists
        if ($crawler->filter('img')->count() > 0) {
            // If image exists, get the first image's src
            $thumbnail = $crawler->filter('img')->first()->attr('src');
        } else {
            // If no image found, use a default image route
        $thumbnail = asset('path/to/default/image.png');
        }


        // Save to database
        Blog::create([
            'title' => $validated['title'],
            'content' => $content,
            'thumbnail' => $thumbnail,
            'created_by' => $validated['creator'],
        ]);
    
        return Redirect(Auth::user()->role. '/blog')->with('success', 'Content saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $blog = Blog::findOrFail($id);
        return view('pages.dashboard.blog-detail',  compact('blog'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $blog = Blog::findOrFail($id);
        $isEditing = true;
        return view('pages.dashboard.form-blog', compact('isEditing', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        
        // Ambil blog berdasarkan ID
        $blog = Blog::findOrFail($id);

        // Ambil konten baru dari request
        $content = $request->input('content');

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
                $filePath = 'public/blog_images/' . $fileName;
                Storage::put($filePath, $imageData);

                // Ganti base64 src di konten dengan URL gambar yang disimpan
                $content = str_replace($src, Storage::url($filePath), $content);
            }
        });

        // Gunakan DomCrawler untuk mengekstrak gambar pertama
        $crawler = new Crawler($content);
            // Check if the image exists
        if ($crawler->filter('img')->count() > 0) {
            // If image exists, get the first image's src
        $thumbnail = $crawler->filter('img')->first()->attr('src');
        } else {
            // If no image found, use a default image route
        $thumbnail = asset('path/to/default/image.png');
        }


        // Update the other blog information
        $blog->update([
            'title' => $request->title,
            'content' => $content,
            
            ]);
    
            return redirect(Auth::user()->role. '/blog')
                             ->with('success', 'Blog created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        //get user by ID
        Blog::findOrFail($id)->delete();

        //redirect to
        return redirect(Auth::user()->role. '/blog')->with('success', 'Data Berhasil Dihapus!');
    }
}
