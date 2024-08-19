@extends('layouts.portal')

@section('row-content')

<div class="container-fluid">
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        Tambah Data
      </div>
      <div class="card-body">

        <a href="{{ route('portal.mygaleri.index') }}" class="btn btn-primary">Kembali</a>
            <br />
            <br />

            <form method="post" action="{{ route('portal.mygaleri.store')}}" enctype="multipart/form-data">

                {{ csrf_field() }}
                @if(session()->has('danger'))
                <div class="text-danger">
                    {{ session()->get("danger")}}
                </div>
                @endif
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="form-group">
                    <label>Judul Gambar</label>
                    <input type="text" name="judul" class="form-control" placeholder="Isi Judul Artikel ..">
                </div>
                <div class="form-group">
                    <label for="kategori_galeri_id">Kategori Divisi :</label>
                    <select id="kategori_galeri_id" name="kategori_galeri_id" class="form-control">
                        @foreach ($kategorigaleri as $p)
                        <option value="{{ $p->id}}">{{$p->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Upload Gambar</label>
                    <input class="form-control" type="file" name="gambar" id="formFileMultiple" multiple>
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