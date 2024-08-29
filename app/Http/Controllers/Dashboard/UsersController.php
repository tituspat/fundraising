<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     // Mengambil data dari table users
    //     $users = User::all();
    //     $admincount = User::where('role', 'admin')->count();
    //     $modcount = User::where('role', 'mod')->count();
    //     $mediacount = User::where('role', 'media')->count();
    //     $membercount = User::where('role', 'member')->count();

    //     return view('pages.dashboard.users-datatable', [
    //         'users' => $users,
    //         'admincount' => $admincount,
    //         'modcount' => $modcount,
    //         'mediacount' => $mediacount,
    //         'membercount' => $membercount,
    //     ]);
    // }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $roleFilter = $request->input('role_filter');

        $query = User::query();

        if ($search) {
            $query->where('name', 'like', "%{$search}%");
        }

        if ($roleFilter) {
            $query->where('role', $roleFilter);
        }

        $users = $query->get();

        $admincount = User::where('role', 'admin')->count();
        $modcount = User::where('role', 'mod')->count();
        $mediacount = User::where('role', 'media')->count();
        $membercount = User::where('role', 'member')->count();

        $roles = Role::all();

        return view('pages.dashboard.users-datatable', [
            'users' => $users,
            'admincount' => $admincount,
            'modcount' => $modcount,
            'mediacount' => $mediacount,
            'membercount' => $membercount,
            'roles' => $roles,
            'search' => $search,
            'roleFilter' => $roleFilter
        ]);
    }


    /**
     * Show the form for updating the user resource.
     */
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'id' => 'required|exists:users,id',
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'nullable|string|min:8',
            'role' => 'required|string'
        ]);

        // Cari role_id berdasarkan nama role
        $role = Role::firstOrCreate(['role' => $request->role]);

        // Update data user
        User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : User::find($request->id)->password,
            'role' => $request->role,
            'role_id' => $role->id,
            'updated_at' => now()
        ]);

        // Kembalikan halaman
        return redirect()->back();
    }

    public function destroy($id)
    {
        // Hapus user berdasarkan ID
        User::where('id', $id)->delete();

        // Redirect ke halaman sebelumnya
        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|string'
        ]);

        // Buat atau dapatkan role_id berdasarkan nama role
        $role = Role::firstOrCreate(['role' => $request->role]);

        // Insert data ke table users
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'role_id' => $role->id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Alihkan halaman ke halaman pengguna
        return redirect()->back();
    }
}
