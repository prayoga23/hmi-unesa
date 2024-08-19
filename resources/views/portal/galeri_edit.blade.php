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
        Edit Data
      </div>
      <div class="card-body">

        <a href="{{ route('portal.publikasi.index') }}" class="btn btn-primary">Kembali</a>
            <br />
            <br />

            <form method="post" action="{{ route('portal.publikasi.update',$publikasi)}}" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{ method_field('PUT') }}
                @if(session()->has('danger'))
                <div class="text-danger">
                    {{ session()->get("danger")}}
                </div>
                @endif
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="form-group">
                    <label>Judul Artikel</label>
                    <input type="text" name="judul" class="form-control" placeholder="Isi Judul Artikel .."
                        value="{{ $publikasi->judul }}">
                </div>

                <div class="form-group">
                    <label>Tanggal Rilis</label>
                    <div class="form-group">
                        <div class="input-group input-group-alternative">

                            <input class="form-control datepicker" placeholder="Select date" name="tanggal_rilis"
                                type="date" value="{{ $publikasi->tanggal_rilis }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi"
                        placeholder="Isi Deskripsi Artikel .." rows="5">{{ $publikasi->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="kategori_publikasi_id">Pilih Kategori Artikel :</label>
                    <select id="kategori_publikasi_id" name="kategori_publikasi_id" class="form-control">
                        @foreach ($kategoriPublikasi as $p)
                        <option value="{{ $p->id}}" {{ ($p->id == $publikasi->kategori_publikasi_id)?'selected':''
                            }}>{{$p->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <img src="{{ asset($publikasi->gambar) }}" class="avatar avatar-lg">
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