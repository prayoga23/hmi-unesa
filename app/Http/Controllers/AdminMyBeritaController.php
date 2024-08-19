<?php

namespace App\Http\Controllers;

use App\Berita;
use App\KategoriBerita;
use Illuminate\Http\Request;
use Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class AdminMyBeritaController extends Controller
{
    public function index()
    {
        // $beritas = berita::where("alamat", "like", '%riau%')->get();
        // $beritas = berita::where('alamat', 'like', '%riau%')->orWhere('alamat', 'like', '%mojokerto%')
        //     ->get();

        $berita = Berita::with('kategori')->where('user_id',Auth::user()->id)->get();

        return view("portal.my_berita", ["berita" => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoriBerita = Kategoriberita::get();
        return view("portal.berita_tambah", [
            "kategoriBerita" => $kategoriBerita
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "user_id" => "required",
            "judul" => "required",
            "tanggal_rilis" => "required",
            "deskripsi" => "required",
            "gambar" => "required",
            "kategori_berita_id" => "required",
        ]);
        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->route("portal.my_berita.create")->with('danger', $validator->errors()->first());
        }
        $uploadFolder = "foto/berita/";
        $image = $request->gambar;
        $imageName = time() . '-' . $image->getClientOriginalName();
        $image->move(public_path($uploadFolder), $imageName);
        $image_link = $uploadFolder . $imageName;

        $berita = new Berita;
        $berita->user_id = $request->user_id;
        $berita->judul = $request->judul;
        $berita->tanggal_rilis = $request->tanggal_rilis;
        $berita->deskripsi = $request->deskripsi;
        $berita->gambar = $image_link;
        $berita->kategori_berita_id = $request->kategori_berita_id;
        $berita->save();

        return redirect()->route("portal.my_berita.index")->with('success', 'berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        return "tampilan untuk detail data berita";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        $kategoriBerita = Kategoriberita::get();
        return view("portal.berita_edit", [
            "berita" => $berita,
            "kategoriBerita" => $kategoriBerita
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $validator = Validator::make($request->all(), [
            "user_id" => "required",
            "judul" => "required",
            "tanggal_rilis" => "required",
            "deskripsi" => "required",
            "kategori_berita_id" => "required",
        ]);
        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->route("portal.my_berita.edit", $berita)->with('danger', $validator->errors()->first());
        }
        if ($request->has('gambar')) {
            $uploadFolder = "foto/berita/";
            $image = $request->gambar;
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path($uploadFolder), $imageName);
            $image_link = $uploadFolder . $imageName;
            $berita->gambar = $image_link;
        }
        $berita->user_id = $request->user_id;
        $berita->judul = $request->judul;
        $berita->tanggal_rilis = $request->tanggal_rilis;
        $berita->deskripsi = $request->deskripsi;
        $berita->kategori_berita_id = $request->kategori_berita_id;
        $berita->save();

        return redirect()->route("portal.my_berita.index")->with('success', 'berita berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->route("portal.my_berita.index")->with('success', 'berita berhasil dihapus');
    }
}
