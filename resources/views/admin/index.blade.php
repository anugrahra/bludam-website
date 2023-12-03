@extends('layouts.main')

@section('content')

<section id="foryou" class="foryou">
    <h2>Halaman <span>Admin</span></h2>
    <div class="row">
      <a href="/pengaduan">
        <div class="foryou-card">
          <img src="img/foryou/3.jpg" alt="layanan" class="foryou-card-img" />
          <h3 class="foryou-card-title">Lihat Pengaduan</h3>
          <!-- <p class="foryou-card-info">Lorem ipsum dolor sit amet.</p> -->
        </div>
      </a>
      <a href="/pesan">
        <div class="foryou-card">
          <img src="img/foryou/3.jpg" alt="layanan" class="foryou-card-img" />
          <h3 class="foryou-card-title">Lihat Pesan</h3>
        </div>
      </a>
    </div>
  </section>
@endsection