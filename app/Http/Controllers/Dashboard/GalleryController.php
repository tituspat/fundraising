<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $galleries = Gallery::all();


        $photos = $galleries->filter(function ($gallery) {
            return $gallery->media === 'photo';
        });

        $videos = $galleries->filter(function ($gallery) {
            return $gallery->media === 'video';
        });

        return view('pages.dashboard.gallery', compact('photos', 'videos', 'galleries'));
    }

    public function showPhoto()
    {

        $galleries = Gallery::all();
        
        
        $photos = $galleries->where('media', '=', 'photo')->where('is_previewed', '=', true);
    
        return view('foto', compact('photos', 'galleries'));
    }
    
    public function showVideo()
    {
        
        $galleries = Gallery::all();
        
        
        $videos = $galleries->where('media', '=', 'video')->where('is_previewed', '=', true);
    
        return view('video', compact('videos', 'galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('pages.dashboard.form-gallery');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'url' => 'nullable|url',
    ],[
        'title' => 'title harus diisi',
        'description' => 'description harus terisi',
        'image' => 'image harus tersedia',
        'url' => 'url harus tersedia',
    ]);

    $mediaType = $request->hasFile('image') ? 'photo' : 'video';

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        
        // Generate a unique file name
        $imageName = time() . '_' . $image->getClientOriginalName();

        // Define the path to save the file
        $destinationPath = public_path('img/gallery');

        // Move the file to the public/img/gallery directory
        $image->move($destinationPath, $imageName);

        // Set the relative path to the file
        $imagePath = 'img/gallery/' . $imageName;
    } else {
        $imagePath = null;
    }

    $videoUrl = $request->input('url');

    Gallery::create([
        'title' => $request->title,
        'description' => $request->description,
        'url' => $mediaType === 'photo' ? $imagePath : $videoUrl,
        'thumbnail' => $mediaType === 'photo' ? $imagePath : $videoUrl,
        'media' => $mediaType,
    ]);

    return redirect(Auth::user()->role. '/gallery')->with('success', 'Gallery created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $gallery = Gallery::findOrFail($id);
        $isEditing = false; // Set $isEditing to true
        return view('pages.dashboard.gallery-detail',  compact('gallery', 'isEditing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

        $gallery = Gallery::findOrFail($id);
        $isEditing = true; // Set $isEditing to true
        return view('pages.dashboard.gallery-detail',  compact('gallery', 'isEditing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $gallery = Gallery::findOrFail($request->id);

        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);


        if($request->hasFile('image')){

            // Get the uploaded file
            $image = $request->file('image');
             // Generate a unique file name
            $image1Name = time() . '_' . $image->getClientOriginalName();
            
            // Define the destination path
            $destinationPath = public_path('img/gallery');
            
            // Move the file to the destination path
            $image->move($destinationPath, $image1Name);
            
            // Set the relative path for the file
            $image1Path = 'img/gallery/' . $image1Name;
            
            // Update the gallery model with the new image path
            $gallery->thumbnail = $image1Path;
            $gallery->url = $image1Path;
        }

        // Update the other gallery information
        $gallery->update([
        'title' => $request->title,
        'description' => $request->description,
        'is_previewed' => false,
        ]);

        return redirect(Auth::user()->role. '/gallery')
                         ->with('success', 'Gallery created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        
        //get user by ID
        Gallery::findOrFail($id)->delete();

        //redirect to
        return redirect(Auth::user()->role. '/gallery')->with('success', 'Data Berhasil Dihapus!');

    }

    /**
     * preview vid.
     */
    public function vidPreview(Request $request)
    {
        
        $request->validate([
            'url' => 'required|url',
        ]);
        
        $url = $request->input('url'); // URL video YouTube
        
        
        $youtubeUrl = $url;

         // Use regular expression to extract the video code
        if (preg_match('/[?&]v=([a-zA-Z0-9_-]+)/', $url, $matches)) {
            $videoCode = $matches[1];
        } else {
            $videoCode = ''; // If no video code is found, set it to an empty string
        }

        $postVideo = $videoCode;
        $siteName = "youtube";

        // Continue with crawling if the URL does not exist
        $client = HttpClient::create();
        $response = $client->request('GET', $url);
        $content = $response->getContent();
        $crawler = new Crawler($content);

        // Extract metadata
        $title = $crawler->filter('meta[name="title"]')->attr('content') ?? 'No title';
        $description = $crawler->filter('meta[name="description"]')->attr('content') ?? 'No description';
        $thumbnail = "https://img.youtube.com/vi/" .$postVideo. "/maxresdefault.jpg";
    
        return view('pages.dashboard.form-gallery', compact('postVideo', 'title', 'description', 'thumbnail', 'siteName'));
    }

    /**
     * store vid.
     */
    public function vidStore(Request $request)
    {
        //

        $request->validate([
            'url' => 'required|url',
            'title' => 'required',
            // 'media' => 'required',
            // 'thumbnail' => 'required',
        ],[
            'title' => 'title harus diisi',
            'url' => 'url harus tersedia',
        ]);
        
        // dd($request->all());
        Gallery::create([
            'url' => $request->input('url'),
            'media' => $request->input('media'),
            'thumbnail' => $request->input('thumbnail'),
            'title' => $request->input('title'),
        ]);

        
        return redirect()->route(Auth::user()->role . '.gallery')->with('success', 'Berita berhasil disimpan');
    }

        /**
     * Remove the specified resource from storage.
     */
    public function toggleVisibility(string $id)
    {
        
        //get user by ID
        $gallery = Gallery::findOrFail($id);

        $gallery->is_previewed = !$gallery->is_previewed;
        $gallery->save();

        //redirect to
        return redirect()->back()->with('success', 'changed');
    }
}
