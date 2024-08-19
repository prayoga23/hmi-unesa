@extends('layout.index')

@section('main-content')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-2">
  <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
    <h3 class="display-4 font-weight-bold text-white">Publikasi</h3>
    <div class="d-inline-flex text-white">
      <p class="m-0"><a class="text-white" href="">Home</a></p>
      <p class="m-0 px-2">/</p>
      <p class="m-0">Publikasi</p>
    </div>
  </div>
</div>
<!-- Header End -->

<!-- Publikasi Start -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-2">
        <ul class="list-inline kategori-filter mb-4" id="portfolio-flters">
          <a class="btn btn-outline-primary m-1 {{ ($kategori == 'Semua')?" active":"" }}"
            href="{{ route('publikasi') }}"">Semua</a>
          @foreach ($kategori_list as $item)
          @if ($kategori == $item->nama_kategori)
            <a class=" btn btn-outline-primary m-1 active"
            href="{{ route('publikasi') }}?kategori={{ urlencode($item->nama_kategori) }}">{{
            $item->nama_kategori }}</a>
          @else
          <a class="btn btn-outline-primary m-1" href=" {{ route('publikasi') }}?kategori={{ urlencode($item->nama_kategori) }}">{{
            $item->nama_kategori }}</a>
          @endif
          @endforeach
        </ul>
      </div>
    </div>
    @if(count($publikasi_list)<1) <div class="row">
      <div class="col-12 text-center mb-5 pb-5">
        <p>Data kosong</p>
      </div>
  </div>
  @endif
  <div class="row">
    @foreach ($publikasi_list as $p)
    <div class="col-lg-4 mb-5">
      <div class="card border-0 bg-light shadow-sm pb-2">
        <img class="card-img-top mb-2" style="height: 200px;min-height:200px;" src="{{ asset($p->gambar) }}" alt="" />
        <div class="card-body text-center">
          <a href="{{route('publikasi.detail',$p->slug)}}">
            <h5>{{ $p->judul }}</h5>
          </a>
          <div class="d-flex justify-content-center mb-3">
            <small class="mr-3"><i class="fa fa-calendar text-primary"></i> {{ $p->tanggal_rilis }}</small>
            <small class="mr-3"><i class="fa fa-tag text-primary"></i> {{ $p->kategori->nama_kategori }}</small>
            <small class="mr-3"><i class="fa fa-comments text-primary"></i> {{count($p->komentar)}}</small>
          </div>
          <p class="card-text">
            <?php $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>'; ?>
            {{ substr(str_replace("&nbsp;"," ",strip_tags($p->deskripsi)),0,101) }}...
          </p>
        </div>
        <a href="{{route('publikasi.detail',$p->slug)}}" class="btn btn-primary px-4 mx-auto mb-4">Baca Lebih
          Lengkap</a>
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
      @for ($i = 1; $i <= $publikasi_list->lastPage(); $i++)
        @if ($i == $publikasi_list->currentPage())
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