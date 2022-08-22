@extends('layouts.guest')

@section('umkm_active','active')

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('paremono/photo/lapangan_paremono.jpg')}}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>UMKM</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>UMKM</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">
          @foreach ($umkms as $umkm)
            <div class="col-xl-4 col-md-6">
              <div class="post-item position-relative h-100">

                <div class="post-img position-relative overflow-hidden" style="max-height: 250px">
                  <img src="{{ Storage::temporaryUrl($umkm->path_foto, now()->addMinutes(5))}}" class="img-fluid" alt="">
                  <span class="post-date">{{$umkm->alamat}}</span>
                </div>

                <div class="post-content d-flex flex-column">

                  <h3 class="post-title">{{$umkm->title}}</h3>

                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                    </div>
                  </div>

                  <p>{{$umkm->ringkasan}}</p>

                  <hr>
                  <div class="row">
                    <div class="col-4 text-center">
                      <a href="https://wa.me/+62{{ltrim($umkm->wa, '0')}}" class="btn btn-success">wa <i class="bi bi-whatsapp"></i></a>
                    </div>
                    <div class="col-4 text-center">
                      <a href="tel:{{$umkm->phone}}" class="btn btn-primary">phone <i class="bi bi-telephone"></i></a>
                    </div>
                    <div class="col-4 text-center">
                      <a href="{{url('/umkm/'.$umkm->id)}}" class="btn btn-warning text-white">detail <i class="bi bi-arrow-bar-right"></i></a>
                    </div>
                  </div>

                </div>

              </div>
            </div><!-- End post list item -->
          @endforeach

        </div><!-- End blog posts list -->

        {{-- <div class="blog-pagination">
          <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div><!-- End blog pagination --> --}}

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

@endsection