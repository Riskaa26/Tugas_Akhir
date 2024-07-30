<?php

namespace App\Http\Controllers\KepaladesaController;

use App\Http\Controllers\Controller;
use App\Models\DataPenduduk;
use Illuminate\Http\Request;

class RekapDataPendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_data_penduduk'] = DataPenduduk::all();
        return view('Kepaladesa.data-Penduduk.index', $data);
    }

    public function show(string $nik)
    {
        $penduduk = DataPenduduk::findOrFail($nik);
        return view('Kepaladesa.data-penduduk.show', compact('penduduk'));
    }
    
    
}