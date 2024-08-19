@extends('layouts.portal')

@section('row-content')

<div class="container-fluid">  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      Data Kategori Galeri
    </div>
    <div class="card-body">
      <a href="{{ route('portal.kategori-galeri.create') }}" class="btn btn-success">Tambah data</a>
      <br>
      <br>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama Kategori</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nama Kategori</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($kategoriGaleri as $p)
                <tr>
                  <td>{{ $p->nama_kategori }}</td>
                  <td>
                    <a href="{{ route('portal.kategori-galeri.edit',$p->id)}}" class="btn btn-info ">
                      Edit
                    </a>
                    <form action="{{ route('portal.kategori-galeri.destroy',$p)}}" method="POST" class="d-inline-block">
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