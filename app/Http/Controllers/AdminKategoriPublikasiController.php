<?php

namespace App\Http\Controllers;

use App\KategoriPublikasi;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use Validator;
use Session;

class AdminKategoriPublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriPublikasi = KategoriPublikasi::get();
        return view('portal.kategori-publikasi', [
            'kategoriPublikasi' => $kategoriPublikasi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portal.kategori-publikasi_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKategoriPublikasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required',
        ]);
        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->route("portal.kategori-publikasi.create")->with('danger', $validator->errors()->first());
        }
        $kategori = new KategoriPublikasi();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return redirect()->route("portal.kategori-publikasi.index")->with('success', 'Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriPublikasi  $kategoriPublikasi
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriPublikasi $kategoriPublikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriPublikasi  $kategoriPublikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriPublikasi $kategoriPublikasi)
    {

        return view('portal.kategori-publikasi_edit', [
            'kategoriPublikasi' => $kategoriPublikasi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKategoriPublikasiRequest  $request
     * @param  \App\KategoriPublikasi  $kategoriPublikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriPublikasi $kategoriPublikasi)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required',
        ]);
        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->route("portal.kategori-publikasi.edit")->with('danger', $validator->errors()->first());
        }
        $kategoriPublikasi->nama_kategori = $request->nama_kategori;
        $kategoriPublikasi->save();

        return redirect()->route("portal.kategori-publikasi.index")->with('success', 'Kategori berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriPublikasi  $kategoriPublikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriPublikasi $kategoriPublikasi)
    {
        $kategoriPublikasi->delete();
        return redirect()->route("portal.kategori-publikasi.index")->with('success', 'Kategori berhasil dihapus');
    }
}
