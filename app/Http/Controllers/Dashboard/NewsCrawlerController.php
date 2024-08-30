<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;

class NewsCrawlerController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('pages.dashboard.berita', compact('berita'));
    }

    public function create()
    {
        return view('pages.dashboard.form-berita');
    }

    public function preview(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
        ]);

        $url = $request->input('url');

        // Check if the URL already exists in the database
        $existingBerita = Berita::where('url', $url)->first();

        if ($existingBerita) {
            // Return to the form with an error message if URL already exists
            return redirect()->back()->withErrors(['url' => 'Berita dengan URL ini sudah ada di database.']);
        }

        // Continue with crawling if the URL does not exist
        $client = HttpClient::create();
        $response = $client->request('GET', $url);
        $content = $response->getContent();
        $crawler = new Crawler($content);

        // Extract metadata
        $title = $crawler->filter('meta[property="og:title"]')->attr('content') ?? 'No title';
        $description = $crawler->filter('meta[property="og:description"]')->attr('content') ?? 'No description';
        $thumbnail = $crawler->filter('meta[property="og:image"]')->attr('content') ?? 'No image';

        // Return the view with the crawled data
        return view('pages.dashboard.form-berita', compact('title', 'description', 'thumbnail', 'url'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
        ]);

        Berita::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'thumbnail' => $request->input('thumbnail'),
            'url' => $request->input('url'),
            'is_expired' => false,
            'is_previewed' => false,
        ]);

        return redirect()->route(Auth::user()->role . '.berita')->with('success', 'Berita berhasil disimpan');
    }

    public function tampilkan($id)
    {
        $berita = Berita::find($id);

        if (!$berita) {
            return redirect()->route(Auth::user()->role . '.berita')->with('error', 'Berita tidak ditemukan');
        }

        $berita->is_previewed = 1;
        $berita->save();

        return redirect()->route(Auth::user()->role . '.berita')->with('success', 'Berita berhasil ditampilkan');
    }
    public function sembunyikan($id)
{
    $berita = Berita::findOrFail($id);
    $berita->is_previewed = 0;
    $berita->save();

    return redirect()->back()->with('success', 'Berita berhasil disembunyikan');
}

}
