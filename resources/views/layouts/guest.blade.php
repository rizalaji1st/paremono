<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desa Paremono @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('layouts.guest.style')
</head>

<body>

  @include('layouts.guest.header')

  @yield('content')

  @include('layouts.guest.footer')

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  @include('layouts.guest.script')
</body>

</html>