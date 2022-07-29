@extends('layouts.guest')

@section('content')
      <!-- Intro-->
      <section class="d-flex align-items-center position-relative bg-dark bg-size-cover bg-position-center min-vh-100 overflow-hidden pt-6 pb-lg-5" style="background-image: url(img/demo/presentation/intro/bg.jpg);">
        <div class="container-fluid pt-4 pb-5 py-lg-5">
          <div class="row align-items-center py-3">
            <div class="col-xl-6 col-lg-5 d-flex justify-content-end">
              <div class="pt-2 mx-auto mb-5 mb-lg-0 ms-lg-0 me-xl-7 text-center text-lg-start" style="max-width: 495px;">
                <h1 class="display-4 text-light pb-2">Desa Paremono</h1>
                <p class="h4 fw-light text-light opacity-70 line-height-base">Desa Paremono, Kecamatan Mungkid, Kabupaten Magelang.</p>
                <hr class="hr-light mt-0 mb-5">
                <div class="row">
                  <div class="col-sm-4 mb-4 mb-sm-0">
                    <div class="h1 text-light mb-1">14</div>
                    <div class="h5 text-light fw-normal opacity-70 mb-2">Dusun</div>
                  </div>
                  <div class="col-sm-4 mb-4 mb-sm-0">
                    <div class="h1 text-light mb-1">2000+</div>
                    <div class="h5 text-light fw-normal opacity-70 mb-1">Kepala Keluarga</div>
                  </div>
                  <div class="col-sm-4">
                    <div class="h1 text-light mb-1">7000+</div>
                    <div class="h5 text-light fw-normal opacity-70 mb-1">Penduduk</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-7">
              <div class="parallax ms-lg-n5" style="max-width: 920px;">
                <div class="parallax-layer position-relative" data-depth="0.1"><img src="{{asset('/around/dist/img/demo/presentation/intro/layer01.png')}}" alt="Layer"></div>
                <div class="parallax-layer" style="z-index: 2;" data-depth="0.3"><img src="{{asset('/around/dist/img/demo/presentation/intro/layer02.png')}}" alt="Layer"></div>
                <div class="parallax-layer" data-depth="0.2"><img src="{{asset('/around/dist/img/demo/presentation/intro/layer03.png')}}" alt="Layer"></div>
                <div class="parallax-layer" style="z-index: 3;" data-depth="0.1"><img src="{{asset('/around/dist/img/demo/presentation/intro/layer04.png')}}" alt="Layer"></div>
                <div class="parallax-layer" data-depth="0.15"><img src="{{asset('/around/dist/img/demo/presentation/intro/layer05.png')}}" alt="Layer"></div>
                <div class="parallax-layer position-absolute" style="z-index: 4;" data-depth="0.25"><div style="margin-top:20%; margin-left:40%;"><img style="border-radius:50%; width: calc(100px + 40%);" src="{{$galeri1 ? Storage::temporaryUrl($galeri1->value, now()->addMinutes(5)) : asset('/around/dist/img/demo/presentation/intro/layer06.png')}}" alt="Layer"></div></div>
                <div class="parallax-layer position-absolute" data-depth="0.3"><div style="margin-top:40%; margin-left:60%;"><img style="border-radius:50%; width: calc(50px + 40%);" src="{{ $galeri2 ? Storage::temporaryUrl($galeri2->value, now()->addMinutes(5)) : asset('/around/dist/img/demo/presentation/intro/layer07.png')}}" alt="Layer"></div></div>
                <div class="parallax-layer position-absolute" data-depth="0.4"><div style="margin-top:10%; margin-left:15%;"><img style="border-radius:50%; width: calc(60px + 40%);" src="{{$galeri3 ? Storage::temporaryUrl($galeri3->value, now()->addMinutes(5)) : asset('/around/dist/img/demo/presentation/intro/layer08.png')}}" alt="Layer"></div></div>
                <div class="parallax-layer position-absolute" data-depth="0.35"><div style="margin-top:15%; margin-left:80%;"><img style="border-radius:50%; width: calc(70px + 40%);" src="{{$galeri4 ? Storage::temporaryUrl($galeri4->value, now()->addMinutes(5)) : asset('/around/dist/img/demo/presentation/intro/layer09.png')}}" alt="Layer"></div></div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection