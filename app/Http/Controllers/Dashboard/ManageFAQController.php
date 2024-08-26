<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Faq;
use Illuminate\Support\Facades\DB;


class ManageFAQController extends Controller
{

    public function index()
    {
    	$faqs = DB::table('faqs')->get();

        return view('pages.dashboard.faqs', [
        'faqs' => $faqs,
        ]);
    }

        /**
     * Show the form for update user resource.
     */
    public function update(Request $request)
{
    // Validate the request
    $validatedData = $request->validate([
        'id' => 'required|integer|exists:faqs,id',
        'question' => 'required|string|max:255',
        'answer' => 'required|string|max:1000',
    ]);

    try {
        // Update the FAQ entry
        DB::table('faqs')->where('id', $validatedData['id'])->update([
            'question' => $validatedData['question'],
            'answer' => $validatedData['answer'],
            'updated_at' => now()
        ]);
        return redirect()->back()->with('success', 'FAQ updated successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors('Update failed: ' . $e->getMessage());
    }
}


    public function destroy($id)
    {
        //get user by ID
        DB::table('faqs')->where('id', $id)->delete();


        //redirect to
        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert data ke table pegawai
	    DB::table('faqs')->insert([
	    	'question' => $request->question,
	    	'answer' => $request->answer,
	    	'created_at' => now(),
	    	'updated_at' => now()
	    ]);
	    // alihkan halaman ke halaman pegawai
    	return redirect()->back();
    }

}
