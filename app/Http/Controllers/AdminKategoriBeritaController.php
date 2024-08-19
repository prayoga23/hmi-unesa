<?php

namespace App\Http\Controllers;

use App\KategoriBerita;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use Validator;
use Session;

class AdminKategoriBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriberita = KategoriBerita::get();
        return view('portal.kategori-berita', [
            'kategoriberita' => $kategoriberita,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portal.kategori-berita_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKategoriBeritaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required',
        ]);
        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->route("portal.kategori-berita.create")->with('danger', $validator->errors()->first());
        }
        $kategori = new KategoriBerita();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return redirect()->route("portal.kategori-berita.index")->with('success', 'Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriBerita  $kategoriberita
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriBerita $kategoriberita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriBerita  $kategoriberita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoriBerita = KategoriBerita::where('id',$id)->firstOrfail();
        return view('portal.kategori-berita_edit', [
            'kategoriBerita' => $kategoriBerita,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKategoriBeritaRequest  $request
     * @param  \App\Kategoriberita  $kategoriberita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required',
        ]);
        if ($validator->fails()) {
            // dd($validator->errors());
            return redirect()->route("portal.kategori-berita.edit")->with('danger', $validator->errors()->first());
        }
        $kategoriberita = KategoriBerita::where('id',$id)->firstOrfail();
        $kategoriberita->nama_kategori = $request->nama_kategori;
        $kategoriberita->save();

        return redirect()->route("portal.kategori-berita.index")->with('success', 'Kategori berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriBerita  $kategoriberita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoriberita = KategoriBerita::where('id',$id)->firstOrfail();
        $kategoriberita->delete();
        return redirect()->route("portal.kategori-berita.index")->with('success', 'Kategori berhasil dihapus');
    }
}
