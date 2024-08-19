<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KomentarBerita;
use App\Berita;
use Validator;
class KomentarBeritaController extends Controller
{
    public function upload(Request $request,$id){
        $berita = Berita::where('id', $id)->firstOrFail();
        $validator = Validator::make($request->all(), [
            "nama"=> "required",
            "email" => "required",
            "komentar" => "required",
        ]);
        if ($validator->fails()) {
            // dd($validator->errors());s
            return redirect()->route("berita.detail",$berita->slug)->with('danger', $validator->errors()->first());
        }
        $komentar = new KomentarBerita;
        $komentar->berita_id = $id;
        $komentar->nama = $request->nama;
        $komentar->email = $request->email;
        $komentar->komentar = $request->komentar;
        $komentar->save();

        return redirect()->route("berita.detail",$berita->slug)->with('success', 'Komentar berhasil ditambahkan');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
