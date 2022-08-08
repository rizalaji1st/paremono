
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('paremono/logo/logo.png')}}" alt="">
        <h1>Desa Paremono</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{url('/')}}" class="@yield('home_active')">Home</a></li>
          <li class="dropdown"><a href="{{url('/artikel')}}"><span>Artikel</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              @foreach ($shareKategoris as $shareKategori)
                <li><a href="{{ url('/artikel-kategori/'.$shareKategori->nama) }}">{{$shareKategori->nama}}</a></li>
              @endforeach
            </ul>
          </li>
          <li><a href="{{url('/')}}" class="@yield('galeri_active')">Galeri</a></li>
          <li><a href="{{url('/')}}" class="@yield('umkm_active')">UMKM</a></li>
          <li><a href="{{url('/')}}" class="@yield('kontak_active')">Kontak Penting</a></li>
          <li><a href="{{url('/')}}" class="@yield('tentang_active')">Tentang</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->