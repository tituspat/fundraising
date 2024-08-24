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
            'is_previewed' => true,
        ]);

        return redirect()->route(Auth::user()->role . '.berita')->with('success', 'Berita berhasil disimpan');
    }
}
