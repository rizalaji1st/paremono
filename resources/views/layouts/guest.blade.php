<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desa Paremono @yield('title')</title>
  <meta content="Website Desa Paremono, Kecamatan Mungkid, Kabupaten Magelang, Provinsi Jawa Tengah. Website yang berisi informasi seputar desa paremono mulai dari berita penting, kegiatan masyarakat, galeri, hingga umkm. Paremono termasuk kedalam penghasil peyek petho terbesar" name="description">
  <meta content="desa paremono, peyek petho, mungkid, magelang, smart village, kyai ageng karotangan" name="keywords">
  <meta property="og:locale" content="id" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Website Desa Paremono" />
  <meta property="og:url" content="https://paremono.id" />
  <meta property="og:site_name" content="Desa Paremono" />

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