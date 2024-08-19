@extends('layout.index')

@section('main-content')
  <!-- Header Start -->
  <div class="container-fluid bg-primary">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
      <h3 class="display-4 font-weight-bold text-white">Struktur Kepengurusan</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="">Home</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Struktur Kepengurusan</p>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <img style= "width:100%;" class="foto-struktural" src="{{ asset('img/struktur-kepengurursan-2023-2024.jpg') }}">
@endsection