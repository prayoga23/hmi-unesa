@extends('layout.index')

@section('main-content')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-2">
  <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
    <h3 class="display-4 font-weight-bold text-white">galeri</h3>
    <div class="d-inline-flex text-white">
      <p class="m-0"><a class="text-white" href="">Home</a></p>
      <p class="m-0 px-2">/</p>
      <p class="m-0">galeri</p>
    </div>
  </div>
</div>
<!-- Header End -->

<!-- galeri Start -->
<div class="container-fluid pt-5">
  <div class="container">

    <div class="row">
      <div class="col-12 text-center mb-2">
        <ul class="list-inline kategori-filter mb-4" id="portfolio-flters">
          <a class="btn btn-outline-primary m-1 {{ ($kategori == 'Semua')?" active":"" }}" href="{{ route('galeri') }}"">Semua</a>
          @foreach ($kategori_list as $item)
          @if ($kategori == $item->nama_kategori)
            <a class=" btn btn-outline-primary m-1 active"
            href="{{ route('galeri') }}?kategori={{ urlencode($item->nama_kategori) }}">{{
            $item->nama_kategori }}</a>
          @else
          <a class="btn btn-outline-primary m-1" href=" {{ route('galeri') }}?kategori={{ urlencode($item->nama_kategori) }}">{{
            $item->nama_kategori }}</a>
          @endif
          @endforeach
        </ul>
      </div>
    </div>
    @if(count($galeri_list)<1) <div class="row">
      <div class="col-12 text-center mb-5 pb-5">
        <p>Data kosong</p>
      </div>
  </div>
  @endif
  <div class="row">
    @foreach ($galeri_list as $p)
    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
      <div class="position-relative overflow-hidden mb-2">
        <img class="img-fluid w-100" src="{{ asset($p->gambar) }}" alt="" />
        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
          <a href="{{ asset($p->gambar) }}" data-lightbox="portfolio">
            <i class="fa fa-plus text-white" style="font-size: 60px"></i>
          </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
</div>
<!-- Class End -->
<!-- Page Number Start-->
<div class="col-md-12 mb-4">
  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center mb-0">
      @for ($i = 1; $i <= $galeri_list->lastPage(); $i++)
        @if ($i == $galeri_list->currentPage())
        <li class="page-item active">
          <a class="page-link" href="">{{ $i }}</a>
        </li>
        @else
        @if($kategori=="Semua")
        <li class="page-item"><a class="page-link" href="{{url()->current().'?page='.$i }}">{{ $i }}</a></li>
        @else
        <li class="page-item"><a class="page-link" href="{{ url()->current().'?kategori='.$kategori.'&page='.$i }}">{{
            $i }}</a></li>
        @endif
        @endif
        @endfor
    </ul>
  </nav>
</div>
<!-- Page Number End -->

<!-- Footer Start -->
@endsection