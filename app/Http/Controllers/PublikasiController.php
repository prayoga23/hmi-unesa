<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publikasi;
use App\KategoriPublikasi;

class PublikasiController extends Controller
{
    public function index(Request $request)
    {
        $kategori_list = KategoriPublikasi::get();
        $publikasi_list = Publikasi::with("kategori","komentar")->paginate(9);
        // dd($publikasi_list);
        $kategori = "Semua";
        if ($request->has('kategori')) {
            $kategori_opt = KategoriPublikasi::where('nama_kategori', urldecode($request->kategori) )->firstOrFail();
            $publikasi_list = Publikasi::with("kategori","komentar")->where("kategori_publikasi_id", $kategori_opt->id)->paginate(9);
            $kategori = $request->kategori;
        }
        // dd($publikasi_list);
        return view('frontend.publikasi', [
            'kategori_list' => $kategori_list,
            'publikasi_list' => $publikasi_list,
            'kategori' => $kategori,
        ]);
    }
    public function detail($slug)
    {
        $publikasi = Publikasi::with("kategori","komentar","user")->where('slug', $slug)->firstOrFail();
        $publikasi_terkait = Publikasi::with("kategori")->where('slug', '!=', $slug)->limit(3)->get();
        $publikasi_terbaru = Publikasi::with("kategori")->where('slug', '!=', $slug)->orderBy('tanggal_rilis', 'DESC')->first();
        // dd($publikasi_terbaru);
        $kategori = KategoriPublikasi::get();
        return view('frontend.publikasi-detail', [
            'publikasi' => $publikasi,
            'kategori' => $kategori,
            'publikasi_terkait' => $publikasi_terkait,
            'publikasi_terbaru' => $publikasi_terbaru,
        ]);
    }
}
