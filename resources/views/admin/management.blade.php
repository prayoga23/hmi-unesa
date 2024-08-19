@extends('layouts.admin')

@section('row-content')

<div class="container-fluid">  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      Data User
    </div>
    <div class="card-body">
      <a href="{{ route('admin.management.create') }}" class="btn btn-success">Tambah data</a>
      <br>
      <br>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Email</th>
              <th>Role</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nama</th>
              <th>Email</th>
              <th>Role</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($user as $p)
                <tr>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->role }}</td>
                  <td>{{ $p->gambar }} <a href="{{ asset($p->gambar) }}" target="_blank">Lihat</a></td>
                  <td>
                    <a href="{{ route('admin.management.edit',$p)}}" class="btn btn-info ">
                      Edit
                    </a>
                    <form action="{{ route('admin.management.destroy',$p->id)}}" method="POST" class="d-inline-block">
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