@php
$herodata = get_hero_data();
$aboutdata = get_about_data();
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
    @if (Session::has('success'))
      <script>
        (function() {
          alert("Pesan anda berhasil terkirim!");
        })();
      </script>
    @endif

    <!-- navbar -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">BLUD <span>Air Minum</span> Kota Cimahi</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#foryou">Untuk Anda</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        {{-- <a href="#" id="search"><i data-feather="search"></i></a> --}}
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- hero section -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Mengalirkan <span>kebahagiaan</span> setiap saat</h1>
        <p>
          Kami adalah penyedia layanan air minum perpipaan di Kota Cimahi yang
          telah melayani lebih dari 4500 sambungan rumah.
        </p>
        <a href="#contact" class="cta">Hubungi Kami</a>
      </main>
    </section>
    <!-- hero section end -->

    <!-- about section -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>
      <div class="row">
        <div class="about-img">
          <img src="{{ Storage::url($aboutdata->thumbnail) }}" alt="Tentang Kami" />
        </div>
        <div class="content">
          {{-- <h3>{{$aboutdata->title}}</h3> --}}
          <div>
            {!! substr($aboutdata->content, 0, 300) !!}
          </div>
          <b><a href="/about" class="cta">Baca Selengkapnya</a></b>
        </div>
      </div>
    </section>
    <!-- about section end -->

    <!-- foryou section -->
    <section id="foryou" class="foryou">
      <h2><span>Untuk</span> Anda</h2>
      {{-- <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa vel
        asperiores ratione consectetur error quia?
      </p> --}}

      <div class="row">
        <a href="/under">
          <div class="foryou-card">
            <img src="img/foryou/1.jpg" alt="layanan" class="foryou-card-img" />
            <h3 class="foryou-card-title">Sambungan Baru</h3>
            <!-- <p class="foryou-card-info">Lorem ipsum dolor sit amet.</p> -->
          </div>
        </a>
        <a href="/under">
          <div class="foryou-card">
            <img src="img/foryou/2.png" alt="layanan" class="foryou-card-img" />
            <h3 class="foryou-card-title">Cek Tagihan</h3>
          </div>
        </a>
        <a href="/formpengaduan">
          <div class="foryou-card">
            <img src="img/foryou/3.jpg" alt="layanan" class="foryou-card-img" />
            <h3 class="foryou-card-title">Pengaduan</h3>
          </div>
        </a>
        <a href="/under">
          <div class="foryou-card">
            <img src="img/foryou/4.jpg" alt="layanan" class="foryou-card-img" />
            <h3 class="foryou-card-title">Pembelian Air Tangki</h3>
          </div>
        </a>
      </div>
    </section>
    <!-- foryou section end -->

    <!-- contact section -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      {{-- <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima,
        tempora?
      </p> --}}
      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.178828613024!2d107.5524280748444!3d-6.869163467208728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5a2c7e54877%3A0x430cdc43eb31cc19!2sBLUD%20Air%20Minum%20Kota%20Cimahi!5e0!3m2!1sen!2sid!4v1700726249653!5m2!1sen!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="{{url('pesan')}}" method="post">
          @csrf 
          @if ($errors->any())
            <div>
              <p>nama, no telepon, dan pesan wajib diisi</p>
            </div>
           @endif
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" name="nama" id="nama" required/>
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email (jika ada)" name="email" id="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="phone" name="phone" id="phone" required/>
          </div>
          <div class="input-group">
            <i data-feather="file-text"></i>
            <input type="text" placeholder="tuliskan pesan anda"  name="pesan" id="pesan" required/>
          </div>
          <button type="submit" class="btn">Kirim</button>
        </form>
      </div>
    </section>
    <!-- contact section end -->

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
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#foryou">Untuk Anda</a>
        <a href="#contact">Kontak</a>
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