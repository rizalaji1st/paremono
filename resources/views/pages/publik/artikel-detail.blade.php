@extends('layouts.guest')

@section('artikel_active','active')

@section('content')
  
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('paremono/photo/lapangan_paremono.jpg')}}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Artikel</h2>
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li>Artikel Detail</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Details Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-5">

        <div class="col-lg-8">

          <article class="blog-details">

            <div class="post-img">
              <img src="{{ Storage::temporaryUrl($blog->path_foto, now()->addMinutes(5))}}" alt="" class="img-fluid">
            </div>

            <h2 class="title">{{$blog->title}}</h2>

            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{$blog->tanggal->isoFormat('dddd, D MMMM Y')}}</time></a></li>
              </ul>
            </div><!-- End meta top -->

            <div class="content">
              {!! $blog->isi !!}
            </div><!-- End post content -->
            <br>
            <div class="meta-bottom">
              <i class="bi bi-folder"></i>
              <ul class="cats">
                @foreach ($blog->kategoris as $kategori)
                  <li><a href="{{url('/artikel-kategori/'.$kategori->nama)}}">{{$kategori->nama}}</a></li>
                @endforeach
              </ul>
            </div><!-- End meta bottom -->

          </article><!-- End blog post -->

        </div>

        <div class="col-lg-4">

          <div class="sidebar">

            <div class="sidebar-item categories">
              <h3 class="sidebar-title">Categories</h3>
              <ul class="mt-3">
                @foreach ($kategoris as $kategori)
                  <li><a href="{{url('/artikel-kategori/'.$kategori->nama)}}">{{$kategori->nama}} <span>({{$kategori->blogKategoris->count()}})</span></a></li>  
                @endforeach
              </ul>
            </div><!-- End sidebar categories-->

            <div class="sidebar-item recent-posts">
              <h3 class="sidebar-title">Recent Posts</h3>

              <div class="mt-3">
                @foreach ($latest_blogs as $latest_blog)
                  <div class="post-item mt-3">
                    <img src="{{ Storage::temporaryUrl($latest_blog->path_foto, now()->addMinutes(5)) }}" alt="">
                    <div>
                      <h4><a href="{{url('/artikel/'.$latest_blog->title)}}">{{$latest_blog->title}}</a></h4>
                      <time datetime="2020-01-01">{{$latest_blog->tanggal->isoFormat('dddd, D MMMM Y')}}</time>
                    </div>
                  </div><!-- End recent post item-->
                @endforeach

              </div>

            </div><!-- End sidebar recent posts-->

          </div><!-- End Blog Sidebar -->

        </div>
      </div>

    </div>
  </section><!-- End Blog Details Section -->

</main><!-- End #main -->


@endsection