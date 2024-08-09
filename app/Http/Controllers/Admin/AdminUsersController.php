<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AdminUsersController extends Controller
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

        return view('pages.admin.users-datatable', [
        'users' => $users,
        'admincount' => $admincount,
        'modcount' =>$modcount,
        'mediacount' =>$mediacount,
        'membercount' =>$membercount,
        ]);
    }
}
