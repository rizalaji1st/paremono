@extends('layouts.guest')

@section('content')
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Selamat Datang Di <span>Website Desa Paremono</span></h2>
            <p data-aos="fade-up">Desa Paremono, Kecamatan Mungkid, Kabupaten Magelang, Provinsi Jawa Tengah.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      @foreach ($galeri_homes as $galeri)
        <div class="carousel-item @if($loop->first)active @endif" style="background-image: url({{ Storage::temporaryUrl($galeri->value, now()->addMinutes(5))}})"></div>
      @endforeach
      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">
    
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">
    
      <div class=" section-header">
        <h2>Berita Terkini</h2>
      </div>

      <div class="row gy-5">
        @foreach ($blogs as $blog)
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
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
        
                      <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        
                    </div>
        
                  </div>
                </div><!-- End post item -->
        @endforeach

      </div>

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->

    
    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Galeri Desa</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('upconstruction/assets/img/projects/remodeling-1.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('upconstruction/assets/img/projects/remodeling-1.jpg')}}" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('upconstruction/assets/img/projects/construction-1.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Construction 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('upconstruction/assets/img/projects/construction-1.jpg')}}" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="{{ asset('upconstruction/assets/img/projects/repairs-1.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Repairs 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('upconstruction/assets/img/projects/repairs-1.jpg')}}" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="{{ asset('upconstruction/assets/img/projects/design-1.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('upconstruction/assets/img/projects/design-1.jpg')}}" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="{{ asset('upconstruction/assets/img/projects/remodeling-2.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('upconstruction/assets/img/projects/remodeling-2.jpg')}}" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="{{ asset('upconstruction/assets/img/projects/construction-2.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Construction 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('upconstruction/assets/img/projects/construction-2.jpg')}}" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->
  </main><!-- End #main -->

@endsection