<?php

namespace App\Http\Controllers;

use App\KategoriGaleri;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\StoreKategoriGaleriRequest;
use App\Http\Requests\UpdateKategoriGaleriRequest;

class KategoriGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorigaleri = KategoriGaleri::get();
        return view('portal.kategori-galeri', [
            'kategoriGaleri' => $kategorigaleri,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portal.kategori-galeri_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKategoriGaleriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required',
        ]);
        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->route("portal.kategori-galeri.create")->with('danger', $validator->errors()->first());
        }
        $kategori = new KategoriGaleri();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return redirect()->route("portal.kategori-galeri.index")->with('success', 'Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriGaleri  $kategorigaleri
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriGaleri $kategorigaleri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriGaleri  $kategorigaleri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategorigaleri = KategoriGaleri::where('id',$id)->firstOrFail(); 
        return view('portal.kategori-galeri_edit', [
            'kategoriGaleri' => $kategorigaleri,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKategoriGaleriRequest  $request
     * @param  \App\KategoriGaleri  $kategorigaleri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required',
        ]);
        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->route("portal.kategori-galeri.edit")->with('danger', $validator->errors()->first());
        }
        $kategorigaleri = KategoriGaleri::where('id',$id)->firstOrFail();
        $kategorigaleri->nama_kategori = $request->nama_kategori;
        $kategorigaleri->save();

        return redirect()->route("portal.kategori-galeri.index")->with('success', 'Kategori berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriGaleri  $kategorigaleri
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriGaleri $kategorigaleri)
    {
        $kategorigaleri->delete();
        return redirect()->route("portal.kategori-galeri.index")->with('success', 'Kategori berhasil dihapus');
    }
}
