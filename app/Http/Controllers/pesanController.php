<?php

namespace App\Http\Controllers;

use App\Models\pesan;
use Illuminate\Http\Request;

class pesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pesan::orderBy('id', 'desc')->get();
        return view('admin.inpesan')->with('data', $data);
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
            'nama'=>'required',
            'phone' => 'required',
            'pesan' => 'required'
        ]);

        $data = [
            'nama'=>request('nama'),
            'email'=>request('email'),
            'phone'=>request('phone'),
            'pesan'=>request('pesan'),
        ];
        pesan::create($data);
        return redirect()->to('/')->with('success', 'Pesan anda berhasil dikirim!');
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
