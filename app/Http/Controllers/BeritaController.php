<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\KategoriBerita;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $kategori_list = KategoriBerita::get();
        $berita_list = Berita::with("kategori","komentar")->paginate(9);
        $kategori = "Semua";
        if ($request->has('kategori')) {
            $kategori_opt = KategoriBerita::where('nama_kategori', urldecode($request->kategori))->firstOrFail();
            $berita_list = Berita::with("kategori","komentar")->where("kategori_berita_id", $kategori_opt->id)->paginate(9);
            $kategori = $request->kategori;
        }
        // dd($berita_list);
        return view('frontend.berita', [
            'kategori_list' => $kategori_list,
            'berita_list' => $berita_list,
            'kategori' => $kategori,
        ]);
    }
    public function detail($slug)
    {
        $berita = Berita::with("kategori","komentar","user")->where('slug', $slug)->firstOrFail();
        $berita_terkait = Berita::with("kategori")->where('slug', '!=', $slug)->limit(3)->get();
        $berita_terbaru = Berita::with("kategori")->where('slug', '!=', $slug)->orderBy('tanggal_rilis', 'DESC')->first();
        // dd($berita_terbaru);
        $kategori = KategoriBerita::get();
        // dd($berita);
        return view('frontend.berita-detail', [
            'berita' => $berita,
            'kategori' => $kategori,
            'berita_terkait' => $berita_terkait,
            'berita_terbaru' => $berita_terbaru,
        ]);
    }
}
