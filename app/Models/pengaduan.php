<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_layanan',
        'nomor_pelanggan',
        'nama_pelapor',
        'nomor_telepon', 
        'detail_pengaduan'
    ];
    // protected $table = 'tr_jenis_layanan';
    // protected $connection = 'mysql_second';
}
