@extends('layouts.guest')

@section('umkm_active','active')

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('paremono/photo/lapangan_paremono.jpg')}}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>{{$umkm->title}}</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('/umkm')}}">UMKM</a></li>
          <li>{{$umkm->title}}</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    
    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{Storage::temporaryUrl($umkm->path_foto, now()->addMinutes(5))}}" alt="">
              </div>

              @foreach ($umkm->galeris as $galeri)
                <div class="swiper-slide">
                  <img src="{{Storage::temporaryUrl($galeri->path_foto, now()->addMinutes(5))}}" alt="">
                </div>
              @endforeach


            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>{{$umkm->title}}</h2>
              {!! $umkm->isi !!}

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Informasi Terkait</h3>
              <ul>
                <li><strong>Nama Pemilik</strong> <span>{{$umkm->nama_pemilik}}</span></li>
                <li><strong>Alamat</strong> <span>{{$umkm->alamat}}</span></li>
                @if ($umkm->wa)
                  <li><strong>Wa</strong> <span>{{$umkm->wa}} <a href="https://wa.me/+62{{ltrim($umkm->wa,'0')}}" class="btn btn-success"><i class="bi bi-whatsapp"></i></a></span></li>  
                @endif
                @if ($umkm->phone)
                  <li><strong>Phone</strong> <span>{{$umkm->phone}} <a href="tel:{{$umkm->phone}}" class="btn btn-primary"><i class="bi bi-telephone"></i></a></span></li>
                @endif
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Projet Details Section -->

  </main><!-- End #main -->

@endsection