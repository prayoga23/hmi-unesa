@extends('layouts.portal')

@section('row-content')

<div class="container-fluid">  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      Data Publikasi Saya
    </div>
    <div class="card-body">
      <a href="{{ route('portal.mypublikasi.create') }}" class="btn btn-success">Tambah data</a>
      <br>
      <br>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Tanggal Rilis</th>
              <th>Kategori</th>
              <th>Deskripsi</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Judul</th>
                <th>Tanggal Rilis</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($publikasi as $p)
                <tr>
                    <td>{{ $p->judul }}</td>
                    <td>{{ $p->tanggal_rilis }}</td>
                  <td>{{ $p->kategori->nama_kategori }}</td>
                  <td>{{ substr($p->deskripsi,0,40) }}...</td>
                  <td>{{ $p->gambar }}</td>
                  <td>
                    <a href="{{ route('portal.mypublikasi.edit',$p)}}" class="btn btn-info ">
                      Edit
                    </a>
                    <form action="{{ route('portal.mypublikasi.destroy',$p)}}" method="POST" class="d-inline-block">
                      <button type="submit" class="btn btn-danger">Hapus</button>
                      @csrf
                      @method('DELETE')
                    </form>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

@endsection

@section('script')

@endsection