<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\DataPenduduk;
use App\Models\permintaansurat;
use App\Models\suratselesai;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $permintaan_surat = permintaansurat::whereIn('status', [2, 3])->count();

    $jumlah_penduduk = DataPenduduk::count();
    $jumlah_permintaan_surat = permintaansurat::whereIn('status', [1])->count();

    return view('Admin.Dashboard.index', compact('permintaan_surat', 'jumlah_penduduk', 'jumlah_permintaan_surat'));
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
