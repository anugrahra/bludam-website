<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class digilapp extends Controller
{
    public function callRemoteStoredProcedure()
    {
        $jenis_layanan_id = 2;
        $pengaduan_no_sr = '10009';
        $pengaduan_pelapor = 'Juminah';
        $pengaduan_kontak = '08987865456';
        $pengaduan_detail = 'air tidak mengalir';

        // Memanggil stored procedure pada server MySQL di lokasi lain
        $result = DB::connection('mysql_second')->select("CALL p_store_pengaduan(?, ?, ?, ?, ?)", [$jenis_layanan_id, $pengaduan_no_sr, $pengaduan_pelapor, $pengaduan_kontak, $pengaduan_detail]);

        // Menampilkan hasil
        dd($result);
    }
}
