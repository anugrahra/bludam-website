<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_layanan'=>'required',
            'nomor_pelanggan' =>'required',
            'nama_pelapor'=>'required',
            'nomor_telepon' => 'required',
            'detail_pengaduan' => 'required'
        ]);

        $data = [
            'jenis_layanan'=> request('jenis_layanan'),
            'nomor_pelanggan' => request('nomor_pelanggan'),
            'nama_pelapor'=>request('nama_pelapor'),
            'nomor_telepon'=>request('nomor_telepon'),
            'detail_pengaduan'=>request('detail_pengaduan'),
        ];
        pengaduan::create($data);
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
