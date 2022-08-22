@extends('layouts.guest')

@section('galeri_active','active')

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('paremono/photo/lapangan_paremono.jpg')}}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Galeri Desa</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Galeri Desa</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Galeri Desa</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($galeris as $galeri)
              <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <div class="portfolio-content h-100">
                  <img src="{{ Storage::temporaryUrl($galeri->path_foto, now()->addMinutes(5))}}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>{{$galeri->tanggal->isoFormat('dddd, D MMMM Y')}}</h4>
                    <p>{{$galeri->nama}}</p>
                    <a href="{{ Storage::temporaryUrl($galeri->path_foto, now()->addMinutes(5))}}" title="{{$galeri->keterangan}}" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->
            @endforeach

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->

@endsection