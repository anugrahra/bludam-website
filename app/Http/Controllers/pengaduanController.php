<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pengaduan::orderBy('id', 'desc')->get();
        return view('admin.inpengaduan')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('pengaduan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_layanan_id'=>'required',
            'pengaduan_no_sr' =>'required',
            'pengaduan_pelapor'=>'required',
            'pengaduan_kontak' => 'required',
            'pengaduan_detail' => 'required'
        ]);

        $data = [
            'jenis_layanan'=> request('jenis_layanan_id'),
            'nomor_pelanggan' => request('pengaduan_no_sr'),
            'nama_pelapor'=>request('pengaduan_pelapor'),
            'nomor_telepon'=>request('pengaduan_kontak'),
            'detail_pengaduan'=>request('pengaduan_detail'),
        ];


        $result = DB::connection('mysql_second')->select("CALL p_store_pengaduan(?, ?, ?, ?, ?)", [request('jenis_layanan_id'), request('pengaduan_no_sr'), request('pengaduan_pelapor'), request('pengaduan_kontak'), request('pengaduan_detail')]);

        return redirect()->to('formpengaduan')->with('success', 'Pengaduan anda berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
