@extends('layout.index')

@section('main-content')
<!-- Detail Start -->
<div class="container">
  <div class="row pt-5">
    <div class="col-lg-8">
      <div class="d-flex flex-column text-left mb-3">
        <p class="section-title pr-5">
          <span class="pr-2">Publikasi Detail</span>
        </p>
        <h1 class="mb-3">{{ $publikasi->judul }}</h1>
        <div class="d-flex">
          <p class="mr-3"><i class="fa fa-calendar text-primary"></i> {{ $publikasi->tanggal_rilis }}</p>
          <p class="mr-3">
            <i class="fa fa-tag text-primary"></i> {{ $publikasi->kategori->nama_kategori}}
          </p>
          <p class="mr-3">
            <i class="fa fa-comment text-primary"></i> {{ count($publikasi->komentar)}}
          </p>
          <p class="mr-3"><i class="fa fa-Ulasan text-primary"></i> Penulis : {{ $publikasi->user->nama }}</p>
        </div>
      </div>
      <div class="mb-5">
        <img class="img-fluid rounded w-100 mb-4" src="{{ asset($publikasi->gambar) }}" alt="Image" />
        <p>
          {!! $publikasi->deskripsi !!}
        </p>

      </div>

      <!-- Related Post -->
      <div class="mb-5 mx-n3">
        <div class="owl-carousel post-carousel position-relative">
          <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3">
            <img class="img-fluid" src="img/post-1.jpg" style="width: 80px; height: 80px" />
            <div class="pl-3">
              <h5 class="">Diam amet eos at no eos</h5>
              <div class="d-flex">
                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web
                  Design</small>
                <small class="mr-3"><i class="fa fa-Ulasan text-primary"></i> 15</small>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3">
            <img class="img-fluid" src="img/post-2.jpg" style="width: 80px; height: 80px" />
            <div class="pl-3">
              <h5 class="">Diam amet eos at no eos</h5>
              <div class="d-flex">
                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web
                  Design</small>
                <small class="mr-3"><i class="fa fa-Ulasan text-primary"></i> 15</small>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3">
            <img class="img-fluid" src="img/post-3.jpg" style="width: 80px; height: 80px" />
            <div class="pl-3">
              <h5 class="">Diam amet eos at no eos</h5>
              <div class="d-flex">
                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web
                  Design</small>
                <small class="mr-3"><i class="fa fa-Ulasan text-primary"></i> 15</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Comment List -->
      <div class="mb-5">
        <h2 class="mb-4">{{count($publikasi->komentar)}} Komentar</h2>
        @if (count($publikasi->komentar)>0)
          @foreach ($publikasi->komentar as $item) 
            <div class="media mb-4">
              <div class="media-body">
                <h6>
                  {{  $item->nama}} <small><i>{{ $item->created_at}}</i></small>
                </h6>
                <p>
                  {{ $item->komentar }}
                </p>
              </div>
            </div>
          @endforeach            
        @else
            <p>Tidak ada komentar</p>
        @endif
      </div>

      <!-- Comment Form -->
      <div class="bg-light p-5">
        <h2 class="mb-4">Tinggalkan komentar</h2>
        <form action="{{ route('komentar.publikasi.upload',$publikasi->id) }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Nama *</label>
            <input type="text" class="form-control" id="name" name="nama"  required/>
          </div>
          <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" class="form-control" id="email" name="email"  required/>
          </div>
          <div class="form-group">
            <label for="message">Komentar *</label>
            <textarea id="message" name="komentar" cols="30" rows="5" class="form-control" required></textarea>
          </div>
          <div class="form-group mb-0">
            <input type="submit" value="Leave Comment" class="btn btn-primary px-3" />
          </div>
        </form>
      </div>
    </div>

    <div class="col-lg-4 mt-5 mt-lg-0">

      <!-- Category List -->
      <div class="mb-5">
        <h2 class="mb-4">Kategori</h2>
        <ul class="list-group list-group-flush">
          @foreach ($kategori as $item)
          <li class="list-group-item d-flex justify-content-between align-items-center px-0">
            <a href="{{ route('publikasi') }}?kategori={{$item->nama_kategori}}">{{$item->nama_kategori}}</a>
          </li>
          @endforeach
        </ul>
      </div>

      <!-- Single Image -->
      <div class="mb-5">
        <img src="img/blog-1.jpg" alt="" class="img-fluid rounded" />
      </div>

      <!-- Recent Post -->
      <div class="mb-5">
        <h2 class="mb-4">Publikasi Terkait</h2>
        @if (count($publikasi_terkait)>0)
        @foreach ($publikasi_terkait as $item)
        <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3">
          <img class="img-fluid" src="{{ asset($item->gambar) }}" style="width: 80px; height: 80px" />
          <div class="pl-3">
            <a href="{{ route('publikasi.detail',$item->slug) }}" class="dsd">
              <h5 class="">{{$item->judul}}s</h5>
            </a>
            <div class="d-flex">
              <small class="mr-3"><i class="fa fa-user text-primary"></i> {{ $item->tanggal_rilis }}</small>
              <small class="mr-3"><i class="fa fa-folder text-primary"></i> {{ $item->kategori->nama_kategori }}</small>
              <small class="mr-3"><i class="fa fa-Ulasan text-primary"></i> 15</small>
            </div>
          </div>
        </div>
        @endforeach
        @else
           Tidak ada 
        @endif
      </div>

      <!-- Single Image -->
      <h2 class="mb-4">Publikasi Terbaru</h2>
      @if ($publikasi_terbaru != null)    
      <div class="mb-5">
        <img src="{{ asset($publikasi_terbaru->gambar) }}" alt="" class="img-fluid rounded" />
        <div class="mb-5">
          <h5>{{$publikasi_terbaru->judul}}</h5>
          <a href="{{ route('publikasi.detail',$publikasi_terbaru->slug) }}">Lihat Selengkapnya</a>
        </div>
      </div>
      @else
      Tidak ada
      @endif

      <!-- Plain Text -->



      <!-- Tag Cloud -->
      {{-- <div class="mb-2">
        <h2 class="mb-4">Tag</h2>
        <div class="d-flex flex-wrap m-n1">
          <a href="" class="btn btn-outline-primary m-1">Design</a>
          <a href="" class="btn btn-outline-primary m-1">Development</a>
          <a href="" class="btn btn-outline-primary m-1">Marketing</a>
          <a href="" class="btn btn-outline-primary m-1">SEO</a>
          <a href="" class="btn btn-outline-primary m-1">Writing</a>
          <a href="" class="btn btn-outline-primary m-1">Consulting</a>
        </div>
      </div> --}}
    </div>
  </div>
</div>
<!-- Detail End -->

@endsection