@extends('layouts.portal')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-white">{{ __('Tentang Kami Management') }}</h1>

@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger border-left-danger" role="alert">
    <ul class="pl-4 my-2">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="card">

    <div class="table-responsive">
        <div class="card-body py-3">
            <form>
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="../../../assets/img/team-1.jpg" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col my-auto">
                        <label for="formFileMultiple" class="form-label">Upload Gambar</label>
                        <input class="form-control" type="file" name="gambar" id="formFileMultiple" multiple>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="HMI komisariat Dakwah-Ushuludin(dakush) merupakan salah satu komisariat HMI yang dibawah naungan HMI cabang Kudus. HMI Komisariat Dakush menaungi fakultas dakwah dan ushuludin IAIN Kudus."></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-lg w-100" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection