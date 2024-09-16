<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpClient\HttpClient;
// use Symfony\Component\DomCrawler\Crawler;

class NewsCrawlerController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('pages.dashboard.news', compact('news'));
    }

    public function create()
    {
        return view('pages.dashboard.form-news');
    }

    public function preview(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
        ],[
            'url' => 'harap isi link video youtube',
        ]);

        $url = $request->input('url');

        // Check if the URL already exists in the database
        $existingNews = News::where('url', $url)->first();

        if ($existingNews) {
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
        return view('pages.dashboard.form-news', compact('title', 'description', 'thumbnail', 'url'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
        ]);

        News::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'thumbnail' => $request->input('thumbnail'),
            'url' => $request->input('url'),
            'is_expired' => false,
            'is_previewed' => false,
        ]);

        return redirect()->route(Auth::user()->role . '.news')->with('success', 'Berita berhasil disimpan');
    }

    public function show($id)
    {
        $news = News::find($id);

        if (!$news) {
            return redirect()->route(Auth::user()->role . '.news')->with('error', 'Berita tidak ditemukan');
        }

        $news->is_previewed = 1;
        $news->save();

        return redirect()->route(Auth::user()->role . '.news')->with('success', 'Berita berhasil ditampilkan');
    }
    public function hide($id)
{
    $news = News::findOrFail($id);
    $news->is_previewed = 0;
    $news->save();

    return redirect()->back()->with('success', 'Berita berhasil disembunyikan');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        //get user by ID
        News::findOrFail($id)->delete();

        //redirect to
        return redirect(Auth::user()->role. '/news')->with('success', 'Data Berhasil Dihapus!');
    }

}
