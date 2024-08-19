@extends('layouts.portal')

@section('row-content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profil Saya</h1>
    </div>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          Edit Data
        </div>
        <div class="card-body">
  
          <a href="{{ route('home') }}" class="btn btn-primary">Kembali</a>
              <br />
              <br />
  
              <form method="post" action="{{ route('portal.profil.update',$user)}}" enctype="multipart/form-data">
  
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                  @if(session()->has('danger'))
                  <div class="text-danger">
                      {{ session()->get("danger")}}
                  </div>
                  @endif
  
                  <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" name="nama" class="form-control" placeholder="Isi Nama Depan .."
                          value="{{ $user->nama }}">
                  </div>
                  <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Isi Email .."
                          value="{{ $user->email }}">
                  </div>
                  <div class="form-group">
                      <label>Ganti Password(kosongi jika tidak diganti)</label>
                      <input type="text" name="password" class="form-control" placeholder="Isi password ..">
                  </div>
                  <img src="{{ asset($user->gambar) }}" class="avatar avatar-lg">
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