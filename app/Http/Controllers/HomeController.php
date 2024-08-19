<?php

namespace App\Http\Controllers;

use App\User;
use App\Publikasi;
use App\Berita;
use App\Galeri;
use Illuminate\Support\Facades\Auth;
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
        $users = User::count();
        $publikasi = Publikasi::count();
        $berita = Berita::count();
        $galeri = Galeri::count();
        $my_publikasi = Publikasi::where('user_id', Auth::user()->id)->count();
        $my_berita = Berita::where('user_id',Auth::user()->id)->count();
        $my_galeri = Galeri::where('user_id',Auth::user()->id)->count();

        $widget = [
            'users' => $users,
            'publikasi' => $publikasi,
            'berita' => $berita,
            'galeri' => $galeri,
            'my_publikasi' => $my_publikasi,
            'my_berita' => $my_berita,
            'my_galeri' => $my_galeri

            //...
        ];

        return view('home', compact('widget'));
    }

    public function adminHome()
    {
        // dd("ss");
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];

        return view('admin.index', compact('widget'));
    }
}
