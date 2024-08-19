<?php

namespace App\Http\Controllers;

use App\Publikasi;
use App\KategoriPublikasi;
use Illuminate\Http\Request;
use Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class AdminMyPublikasiController extends Controller
{
    public function index()
    {
        // $publikasis = publikasi::where("alamat", "like", '%riau%')->get();
        // $publikasis = publikasi::where('alamat', 'like', '%riau%')->orWhere('alamat', 'like', '%mojokerto%')
        //     ->get();

        $publikasi = Publikasi::with('kategori')->where('user_id',Auth::user()->id)->get();

        return view("portal.my_publikasi", ["publikasi" => $publikasi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoriPublikasi = KategoriPublikasi::get();
        return view("portal.publikasi_tambah", [
            "kategoriPublikasi" => $kategoriPublikasi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "user_id"=> "required",
            "judul" => "required",
            "tanggal_rilis" => "required",
            "deskripsi" => "required",
            "gambar" => "required",
            "kategori_publikasi_id" => "required",
        ]);
        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->route("portal.my_publikasi.create")->with('danger', $validator->errors()->first());
        }
        $uploadFolder = "foto/publikasi/";
        $image = $request->gambar;
        $imageName = time() . '-' . $image->getClientOriginalName();
        $image->move(public_path($uploadFolder), $imageName);
        $image_link = $uploadFolder . $imageName;

        $publikasi = new Publikasi;
        $publikasi->user_id = $request->user_id;
        $publikasi->judul = $request->judul;
        $publikasi->tanggal_rilis = $request->tanggal_rilis;
        $publikasi->deskripsi = $request->deskripsi;
        $publikasi->gambar = $image_link;
        $publikasi->kategori_publikasi_id = $request->kategori_publikasi_id;
        $publikasi->save();

        return redirect()->route("portal.my_publikasi.index")->with('success', 'Publikasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(publikasi $publikasi)
    {
        return "tampilan untuk detail data publikasi";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publikasi $publikasi)
    {
        $kategoriPublikasi = KategoriPublikasi::get();
        return view("portal.publikasi_edit", [
            "publikasi" => $publikasi,
            "kategoriPublikasi" => $kategoriPublikasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publikasi $publikasi)
    {
        $validator = Validator::make($request->all(), [
            "user_id" => "required",
            "judul" => "required",
            "tanggal_rilis" => "required",
            "deskripsi" => "required",
            "kategori_publikasi_id" => "required",
        ]);
        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->route("portal.my_publikasi.edit", $publikasi)->with('danger', $validator->errors()->first());
        }
        if ($request->has('gambar')) {
            $uploadFolder = "foto/publikasi/";
            $image = $request->gambar;
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path($uploadFolder), $imageName);
            $image_link = $uploadFolder . $imageName;
            $publikasi->gambar = $image_link;
        }

        $publikasi->user_id = $request->user_id;
        $publikasi->judul = $request->judul;
        $publikasi->tanggal_rilis = $request->tanggal_rilis;
        $publikasi->deskripsi = $request->deskripsi;
        $publikasi->kategori_publikasi_id = $request->kategori_publikasi_id;
        $publikasi->save();

        return redirect()->route("portal.my_publikasi.index")->with('success', 'Publikasi berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(publikasi $publikasi)
    {
        $publikasi->delete();
        return redirect()->route("portal.my_publikasi.index")->with('success', 'Publikasi berhasil dihapus');
    }
}
