<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\KategoriGaleri;

class GaleriController extends Controller
{
    public function index(Request $request)
    {
        $kategori_list = KategoriGaleri::get();
        $galeri_list = Galeri::with("kategori")->paginate(9);
        $kategori = "Semua";
        if ($request->has('kategori')) {
            $kategori_opt = KategoriGaleri::where('nama_kategori', urldecode($request->kategori))->firstOrFail();
            $galeri_list = Galeri::where("kategori_galeri_id", $kategori_opt->id)->paginate(9);
            $kategori = $request->kategori;
        }
        // dd($galeri_list);
        return view('frontend.galeri', [
            'kategori_list' => $kategori_list,
            'galeri_list' => $galeri_list,
            'kategori' => $kategori,
        ]);
    }
}
