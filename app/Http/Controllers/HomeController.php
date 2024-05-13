<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Mengambil semua data kategori
        $kategoris = Kategori::all();
        $artikel = Artikel::all();
        $user   = User::all();

        // Mengirim data kategori ke view 'home'
        return view('home', [
            'kategoris' => $kategoris,
            'artikel' => $artikel,
            'users' => $user
        ]);
    }
}