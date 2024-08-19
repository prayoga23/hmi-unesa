@extends('layouts.portal')

@section('row-content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kategori Publikasi</h1>
    </div>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a href="{{ route('portal.kategori-publikasi.index') }}" class="btn btn-secondary">Kembali</a>
      </div>
      <div class="card-body">

        <form method="post" action="{{ route('portal.kategori-publikasi.update',$kategoriPublikasi) }}">

            {{ csrf_field() }}
            {{ method_field('PUT') }}
            @if(session()->has('danger'))
            <div class="text-danger">
                {{ session()->get("danger")}}
            </div>
            @endif

            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" placeholder="Isi Judul Artikel .."
                    value="{{ $kategoriPublikasi->nama_kategori }}">


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