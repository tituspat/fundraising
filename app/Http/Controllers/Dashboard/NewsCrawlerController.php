<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;

class NewsCrawlerController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('pages.dashboard.berita', compact('berita'));
    }
    public function crawlNews()
    {
        $client = HttpClient::create();
        $url = 'https://www.cnnindonesia.com/hiburan/20240823160827-234-1136753/raffi-ahmad-soal-putusan-mk-kawal-dengan-cara-kita-masing-masing';  // Ganti dengan URL yang ingin kamu crawl

        $response = $client->request('GET', $url);
        $content = $response->getContent();
        $crawler = new Crawler($content);

        // Ambil metadata
        $title = $crawler->filter('meta[property="og:title"]')->attr('content') ?? 'No title';
        $description = $crawler->filter('meta[property="og:description"]')->attr('content') ?? 'No description';
        $thumbnail = $crawler->filter('meta[property="og:image"]')->attr('content') ?? 'No image';

        // Simpan ke database
        Berita::create([
            'title' => $title,
            'description' => $description,
            'thumbnail' => $thumbnail,
            'url' => $url,
            'is_expired' => false,
            'is_previewed' => false,
        ]);

        return response()->json(['message' => 'Berita berhasil disimpan']);
    }
}
