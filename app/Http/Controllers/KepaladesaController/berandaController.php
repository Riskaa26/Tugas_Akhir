<?php

namespace App\Http\Controllers\KepaladesaController;

use App\Http\Controllers\Controller;
use App\Models\DataPenduduk;
use App\Models\permintaansurat;
use Illuminate\Http\Request;

class berandaController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_penduduk = DataPenduduk::count();
        $jumlah_laporan = permintaansurat::count(); // Misalkan model laporan Anda bernama Laporan
        return view('Kepaladesa.beranda.index', compact('data_penduduk', 'jumlah_laporan'));
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
        //
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
