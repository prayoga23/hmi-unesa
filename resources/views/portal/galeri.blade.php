@extends('layouts.portal')

@section('row-content')

<div class="container-fluid">  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      Data Galeri
    </div>
    <div class="card-body">
      <a href="{{ route('portal.galeri.create') }}" class="btn btn-success">Tambah data</a>
      <br>
      <br>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($galeri as $p)
                <tr>
                    <td>{{ $p->judul }}</td>
                  <td>{{ $p->kategori->nama_kategori }}</td>
                  <td>{{ $p->gambar }} <a href="{{ asset($p->gambar) }}">lihat</a></td>
                  <td>
                    {{-- <a href="{{ route('portal.galeri.edit',$p)}}" class="btn btn-info ">
                      Edit
                    </a> --}}
                    <form action="{{ route('portal.galeri.destroy',$p)}}" method="POST" class="d-inline-block">
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