@extends('layouts.main')

@section('content')

<section id="pengaduan" class="pengaduan">
    @if (Session::has('success'))
      <script>
        (function() {
          alert("Pengaduan anda berhasil terkirim!");
        })();
      </script>
    @endif
    <h2>Form <span>Pengaduan</span> Pelanggan</h2>
    <p>Silakan isi form dibawah ini jika anda ingin mengadu sesuatu pada kami</p>
    <div class="row">
        <form action="{{url('pengaduan')}}" method="post">
            @csrf
            <div class="input-group">
              <i data-feather="life-buoy"></i>
              <label for="Jenis_layanan">&nbsp;&nbsp;&nbsp;Jenis Layanan&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</label>
              <select name="jenis_layanan" id="jenis_layanan">
                <option value="Pengaduan Lainnya">-- Pilih jenis layanan --</option>
                <option value="Pengaduan Lonjakan Air">Pengaduan Lonjakan Air</option>
                <option value="Pengaduan Kontinuitas Air">Pengaduan Kontinuitas Air</option>
                <option value="Pengaduan Kualitas Air">Pengaduan Kualitas Air</option>
                <option value="Pengaduan Kesalahan Pembayaran">Pengaduan Kesalahan Pembayaran</option>
                <option value="Pengaduan Lainnya">Pengaduan Lainnya</option>
              </select>
            </div>
            <div class="input-group">
              <i data-feather="slack"></i>
              <input type="text" placeholder="No Pelanggan" name="nomor_pelanggan" id="nomor_pelanggan"/>
            </div>
            <div class="input-group">
              <i data-feather="user"></i>
              <input type="text" placeholder="Nama" name="nama_pelapor" id="nama_pelapor"/>
            </div>
            <div class="input-group">
              <i data-feather="phone"></i>
              <input type="text" placeholder="No telepon" name="nomor_telepon" id="nomor_telepon"/>
            </div>
            <div class="input-group">
              <i data-feather="file-text"></i>
              {{-- <input type="text" placeholder="tuliskan pesan anda"  name="pesan" id="pesan" required/> --}}
              <textarea style="width: 100%; max-width: 100%; font-size: 1.7rem;" rows="5"  name="detail_pengaduan" id="detail_pengaduan">tulis detail pengaduan</textarea>
            </div>
            <button type="submit" class="btn">Kirim</button>
          </form>
    </div>
  </section>
@endsection