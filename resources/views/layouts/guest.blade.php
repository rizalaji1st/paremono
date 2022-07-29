<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Desa Paremono</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, consulting, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, multipurpose, product landing, shop, software, ui kit, web studio, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('around/dist/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('around/dist/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('around/dist/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('around/dist/site.webmanifest')}}">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    @include('layouts.guest.style')
  </head>
  <!-- Body-->
  <body>
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Navbar Floating light for Index page only-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      @include('layouts.guest.header')
      <!-- Page content-->
      @yield('content')
    </main>
    <footer class="footer bg-dark pt-5 pt-md-6 pt-lg-7">
        <p class="fs-sm text-center mb-0 pb-5"><span class="text-light opacity-50 me-1">© 2022 Desa Paremono</p>
      </div>
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ai-arrow-up">   </i></a>
    @include('layouts.guest.script')
  </body>
</html>