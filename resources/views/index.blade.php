@extends('layout.index')

@section('main-content')
<!-- Header Start -->
<div class="container-fluid bg-primary px-0 px-md-5 py-5 bg-foto">
  <div class="row align-items-center px-3">
    <div class="col-lg-7 text-center text-lg-left">
      <h4 class="text-white mb-4 mt-5 mt-lg-0">Website HMI</h4>
      <h1 class="display-3 font-weight-bold text-white">
        Komisariat DAKWAH-USHULLUDDIN
      </h1>
      <p class="text-white mb-4">
        Selamat datang di Website HMI Komisariat DAKWAH-USHULLUDDIN, website ini bermaksud
        menjadi sarana untuk bersilahturahmi, sarana publikasi
        dan juga media informasi.
      </p>
      <!-- <a href="" class="btn btn-secondary mt-1 py-3 px-5">Tentang kami</a> -->
    </div>
    <div class="col-lg-5 text-center text-lg-right">
      <!-- <img class="img-fluid mt-5" src="img/logo.png" alt="" /> -->
    </div>
  </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <img class="img-fluid rounded mb-5 mb-lg-0" src="img/logo.png" alt="" />
      </div>
      <div class="col-lg-7">
        <p class="section-title section-title-secondary pr-5">
          <span class="pr-2">Tentang Kami</span>
        </p>
        <h1 class="mb-4 ">Himpunan Mahasiswa Islam</h1>
        <p>
          organisasi mahasiswa yang didirikan di Yogyakarta pada
          tanggal 5 Februari 1947, atas prakarsa Lafran Pane
          beserta 14 orang mahasiswa Sekolah Tinggi Islam.
        </p>
        <div class="row pt-2 pb-4">
          <div class="col-12 col-md-12">
            <ul class="list-inline m-0">
              <li class="py-2 border-top border-bottom ">
                <i class="fa fa-check text-primary mr-3"></i>HMI organisasi berazas islam
              </li>
              <li class="py-2 border-bottom ">
                <i class="fa fa-check text-primary mr-3"></i>HMI organisasi yang bersifat Independent
              </li>
              <li class="py-2 border-bottom ">
                <i class="fa fa-check text-primary mr-3"></i>HMI berfungsi sebagai organisasi kader
              </li>
              <li class="py-2 border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>HMI berpereran sebagai organisasi perjuangan
              </li>
            </ul>
          </div>
        </div>
        <a href="{{ route('tentang kami') }}" class="btn btn-primary mt-2 py-2 px-4">Selengkapnya</a>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<!-- Sambutan Start -->
<div class="container-fluid py-5 bg-secondary">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="text-center">
          <p class="section-title section-title-secondary px-5">
            <span class="px-2">Sambutan</span>
          </p>
        </div>
        <h1 class="text-white">M Iqbal Dzulkarnain</h1>
        <p class="mb-4 text-white">- formateur HMI Komisariat Dakwah-Ushuluddin cabang Kudus</p>
        <p class="text-white">
          Assalamualaikum Wr Wb
          <br>
          Selamat datang untuk para pengunjung di website HMI komisariat Dakwah-Ushuluddin 
          cabang Kudus, adanya website ini merupakan bentuk realisasi visi komisariat HMI 
          dakwah suludin untuk menjadikan organisasi yang dapat adaptif terhadap perkembangan 
          zaman. Website ini akan mengakomodir segala informasi tentang kegiatan komisariat dakwah Ushuluddin cabang Kudus, yang mana  disini juga tempat menuangkan kreativitas dari kader-kader terbaik komisariat HMI dakwah usuludin. Harapannya untuk menopang masa depan yang memiliki keberadaban yang inklusif HMI dapat mewarnai tata nilai yang menopang perkembangan zaman melalui kawah Candradimuka yang melahirkan kader-kader yang memiliki semangat keislaman & Keindonesiaan yang tentunya sadar akan perang dan tanggung jawab sebagai kader umat & bangsa.
          <br>
        </p>

      </div>
      <div class="col-lg-5">
        <img class="img-fluid rounded mb-5 mb-lg-0"
          src="{{ asset('img/foto_sambutan2.png') }}" alt="" />
      </div>

    </div>
  </div>
</div>
<!-- Sambutan End -->

<!-- Publikasi Start -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center">
      <p class="section-title px-5">
        <span class="px-2">Publikasi Terbaru</span>
      </p>
    </div>
    <div class="row">
      @foreach ($publikasi_list as $p)
      <div class="col-lg-3 mb-4">
        <div class="card border-0 shadow-lg mb-2" onclick="location.href='{{route('publikasi.detail',$p->slug)}}'">
          <div class="pdf-thumb-box-overlay">
            <span class="fa-stack fa-lg">
              <i class="fa fa-square-o fa-stack-2x pdf-thumb-square"></i>
              <i class="fa fa-eye fa-stack-1x pdf-thumb-eye"></i>
            </span>
          </div>
          <img class="card-img-top mb-0" style="min-height:150px !important;height:150px !important;"
            src="{{ asset($p->gambar) }}" alt="" />
          <div class="card-body bg-light text-center px-3 py-2">
            <h6 class="heading-article">{{ $p->judul }}</h6>
            <div class="d-flex justify-content-center">
              <small class="mr-1"><i class="fa fa-calendar text-primary"></i> {{ $p->tanggal_rilis }}</small>
              <small class="mr-1"><i class="fa fa-tag text-primary"></i> {{ $p->kategori->nama_kategori }}</small>
              <small class="mr-1"><i class="fa fa-comment text-primary"></i> {{ count($p->komentar) }}</small>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row mb-4">
      <a href="{{ route('publikasi') }}" class="btn btn-secondary px-4 py-2 mx-auto my-2">Lihat semua publikasi</a>
    </div>
  </div>
</div>
<!-- Publikasi End -->

<!-- Berita Start -->
<div class="container-fluid pt-5 bg-primary">
  <div class="container">
    <div class="text-center">
      <p class="section-title px-5">
        <span class="px-2">Berita Terbaru</span>
      </p>
    </div>
    <div class="row">
      @foreach ($berita_list as $p)
      <div class="col-lg-3 mb-4">
        <div class="card border-0 shadow-lg mb-2" onclick="location.href='{{route('berita.detail',$p->slug)}}'">
          <div class="pdf-thumb-box-overlay">
            <span class="fa-stack fa-lg">
              <i class="fa fa-square-o fa-stack-2x pdf-thumb-square"></i>
              <i class="fa fa-eye fa-stack-1x pdf-thumb-eye"></i>
            </span>
          </div>
          <img class="card-img-top mb-0" src="{{ asset($p->gambar) }}"" alt=""  style=" min-height:150px
            !important;height:150px !important;" />
          <div class=" card-body bg-light text-center px-3 py-2">
            <h6 class="heading-article">{{ $p->judul }}</h6>
            <div class="d-flex justify-content-center">
              <small class="mr-1"><i class="fa fa-calendar text-primary"></i> {{ $p->tanggal_rilis }}</small>
              <small class="mr-1"><i class="fa fa-tag text-primary"></i> {{ $p->kategori->nama_kategori }}</small>
              <small class="mr-1"><i class="fa fa-comment text-primary"></i> {{ count($p->komentar) }}</small>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row mb-4">
      <a href="{{ route('berita') }}" class="btn btn-secondary px-4 py-2 mx-auto my-2">Lihat semua Berita</a>
    </div>
  </div>
</div>
<!-- Berita End -->

<!-- Gallery Start -->
<div class="container-fluid pt-5 pb-3">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Galeri</span>
      </p>
    </div>
    <div class="row portfolio-container">

      @foreach ($galeri_list as $p)
      <div class="col-lg-4 col-md-6 mb-4 portfolio-item ">
        <div class="position-relative overflow-hidden mb-2">
          <img class="img-fluid w-100" src="{{ asset($p->gambar) }}" alt="" style=" min-height:250px
          !important;height:250px !important;" />
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
<!-- Gallery End -->
@endsection