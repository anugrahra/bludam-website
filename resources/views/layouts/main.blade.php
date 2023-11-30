@php
$herodata = get_hero_data();
@endphp

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BLUD Air Minum Kota Cimahi</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- feathers icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- favicon -->

    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />

    <!-- my style -->
    <style>
        .hero{
            background-image: url({{ Storage::url($herodata->background) }});
        }
    </style>
    
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">BLUD <span>Air Minum</span> Kota Cimahi</a>

      <div class="navbar-nav">
        <a href="/">Home</a>
        <a href="/about">Tentang Kami</a>
        <a href="/#foryou">Untuk Anda</a>
        <a href="/#contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- navbar end -->

    {{-- content --}}
    @yield('content')
    {{-- content end --}}

    <!-- footer -->
    <footer>
      <div class="socials">
        <a href="https://instagram.com/blud_am"
          ><i data-feather="instagram"></i
        ></a>
        <a href="#"><i data-feather="facebook"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
      </div>
      <div class="links">
        <a href="/#home">Home</a>
        <a href="/#about">Tentang Kami</a>
        <a href="/foryou">Untuk Anda</a>
        <a href="/#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>
            BLUDAM &copy; 2023 | powered by <a href="https://heyanugrah.com">H▲A</a>
        </p>
      </div>
    </footer>
    <!-- footer end -->

    <!-- feathers icon -->
    <script>
      feather.replace();
    </script>

    <!-- my javascript -->
    <script src="js/script.js"></script>
  </body>
</html>