@extends('layouts.guest')

@section('artikel_active','active')

@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('upconstruction/assets/img/breadcrumbs-bg.jpg')}}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Artikel</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Artikel</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">
          @foreach ($blogs as $blog)
            <div class="col-xl-4 col-md-6">
              <div class="post-item position-relative h-100">

                <div class="post-img position-relative overflow-hidden">
                  <img src="{{ Storage::temporaryUrl($blog->path_foto, now()->addMinutes(5))}}" class="img-fluid" alt="">
                  <span class="post-date">{{$blog->tanggal->isoFormat('dddd, D MMMM Y')}}</span>
                </div>

                <div class="post-content d-flex flex-column">

                  <h3 class="post-title">{{$blog->title}}</h3>

                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      @foreach ($blog->kategoris as $kategori)
                        <i class="bi bi-folder2"></i> <span class="ps-2">{{$kategori->nama}}</span>
                      @endforeach
                    </div>
                  </div><br>

                  <p>{{mb_strimwidth(strip_tags($blog->isi), 0, 97, '...')}}</p>

                  <hr>

                  <a href="{{url('/artikel/'.$blog->title)}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                </div>

              </div>
            </div><!-- End post list item -->
          @endforeach

        </div><!-- End blog posts list -->

        <div class="blog-pagination">
          <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div><!-- End blog pagination -->

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

@endsection