@extends('layouts.portal')

@section('row-content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kategori Galeri</h1>
    </div>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        Tambah Data
      </div>
      <div class="card-body">

        <a href="{{ route('portal.kategori-galeri.index') }}" class="btn btn-secondary">Kembali</a>
        <br>
        <br>

        <form method="post" action="{{ route('portal.kategori-galeri.store') }}">

            {{ csrf_field() }}
            @if(session()->has('danger'))
            <div class="text-danger">
                {{ session()->get("danger")}}
            </div>
            @endif

            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" placeholder="Isi Judul Artikel ..">


            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>

        </form>

    </div>
    </div>
  
  </div>
    
@endsection

@section('script')

@endsection