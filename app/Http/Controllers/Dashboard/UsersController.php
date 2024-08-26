<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil data dari user login
    	$users = DB::table('users')->get();
    	$admincount = DB::table('users')->where('role', 'admin')->count();
    	$modcount = DB::table('users')->where('role', 'mod')->count();
    	$mediacount = DB::table('users')->where('role', 'media')->count();
    	$membercount = DB::table('users')->where('role', 'member')->count();

        return view('pages.dashboard.users-datatable', [
        'users' => $users,
        'admincount' => $admincount,
        'modcount' =>$modcount,
        'mediacount' =>$mediacount,
        'membercount' =>$membercount,
        ]);
    }

    /**
     * Show the form for update user resource.
     */
    public function update(Request $request)
    {
        	// update data user
	        DB::table('users')->where('id',$request->id)->update([
		    'name' => $request->name,
		    'email' => $request->email,
		    'password' => $request->password,
		    'role' => $request->role,
		    'updated_at' => now()
	    ]);

            // kembalikan halaman
            return redirect()->back();
    }

    public function destroy($id)
    {
        //get user by ID
        DB::table('users')->where('id', $id)->delete();


        //redirect to
        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert data ke table pegawai
	    DB::table('users')->insert([
	    	'name' => $request->name,
	    	'email' => $request->email,
	    	'password' => $request->password,
	    	'role' => $request->role,
	    	'created_at' => now(),
	    	'updated_at' => now()
	    ]);
	    // alihkan halaman ke halaman pegawai
    	return redirect()->back();
    }
}
