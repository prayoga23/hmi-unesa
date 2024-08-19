<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\KategoriGaleri;
use Illuminate\Http\Request;
use Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;

class AdminMyGaleriController extends Controller
{
    public function index()
    {
        // $galeris = galeri::where("alamat", "like", '%riau%')->get();
        // $galeris = galeri::where('alamat', 'like', '%riau%')->orWhere('alamat', 'like', '%mojokerto%')
        //     ->get();

        $galeri = Galeri::with('kategori')->where('user_id',Auth::user()->id)->get();

        return view("portal.my_galeri", ["galeri" => $galeri]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategorigaleri = Kategorigaleri::get();
        return view("portal.galeri_tambah", [
            "kategorigaleri" => $kategorigaleri
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
            "gambar" => "required",
            "kategori_galeri_id" => "required",
        ]);
        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->route("portal.my_galeri.create")->with('danger', $validator->errors()->first());
        }
        $uploadFolder = "foto/galeri/";
        $image = $request->gambar;
        $imageName = time() . '-' . $image->getClientOriginalName();
        $image->move(public_path($uploadFolder), $imageName);
        $image_link = $uploadFolder . $imageName;

        $galeri = new galeri;
        $galeri->user_id = $request->user_id;
        $galeri->judul = $request->judul;
        $galeri->gambar = $image_link;
        $galeri->kategori_galeri_id = $request->kategori_galeri_id;
        $galeri->save();

        return redirect()->route("portal.my_galeri.index")->with('success', 'galeri berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(galeri $galeri)
    {
        return "tampilan untuk detail data galeri";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(galeri $galeri)
    {
        $kategorigaleri = Kategorigaleri::get();
        return view("portal.galeri_edit", [
            "galeri" => $galeri,
            "kategorigaleri" => $kategorigaleri
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, galeri $galeri)
    {
        $validator = Validator::make($request->all(), [
            "user_id" => "required",
            "judul" => "required",
            "kategori_galeri_id" => "required",
        ]);
        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->route("portal.my_galeri.edit", $galeri)->with('danger', $validator->errors()->first());
        }
        if ($request->has('gambar')) {
            $uploadFolder = "foto/galeri/";
            $image = $request->gambar;
            $imageName = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path($uploadFolder), $imageName);
            $image_link = $uploadFolder . $imageName;
            $galeri->gambar = $image_link;
        }

        $ggaleri->user_id = $request->user_id;
        $galeri->judul = $request->judul;
        $galeri->kategori_galeri_id = $request->kategori_galeri_id;
        $galeri->save();

        return redirect()->route("portal.my_galeri.index")->with('success', 'galeri berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(galeri $galeri)
    {
        $galeri->delete();
        return redirect()->route("portal.my_galeri.index")->with('success', 'galeri berhasil dihapus');
    }
}
