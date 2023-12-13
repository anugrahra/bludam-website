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
              <label for="jenis_layanan_id">&nbsp;&nbsp;&nbsp;Jenis Layanan&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</label>
              <select name="jenis_layanan_id" id="jenis_layanan_id">
                <option value="Pengaduan Lainnya">-- Pilih jenis layanan --</option>
                @foreach ($data as $item)
                <option value="{{ $item->jns_layanan_id }}">{{ $item->jns_layanan_nama }}</option>
                @endforeach
              </select>
            </div>
            <div class="input-group">
              <i data-feather="slack"></i>
              <input type="text" placeholder="No Pelanggan" name="pengaduan_no_sr" id="pengaduan_no_sr"/>
            </div>
            <div class="input-group">
              <i data-feather="user"></i>
              <input type="text" placeholder="Nama" name="pengaduan_pelapor" id="pengaduan_pelapor"/>
            </div>
            <div class="input-group">
              <i data-feather="phone"></i>
              <input type="text" placeholder="No telepon" name="pengaduan_kontak" id="pengaduan_kontak"/>
            </div>
            <div class="input-group">
              <i data-feather="file-text"></i>
              {{-- <input type="text" placeholder="tuliskan pesan anda"  name="pesan" id="pesan" required/> --}}
              <textarea style="width: 100%; max-width: 100%; font-size: 1.7rem;" rows="5"  name="pengaduan_detail" id="pengaduan_detail">tulis detail pengaduan</textarea>
            </div>
            <button type="submit" class="btn">Kirim</button>
          </form>
    </div>
  </section>
@endsection