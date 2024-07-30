<?php

namespace App\Http\Controllers\KepaladesaController;

use App\Http\Controllers\Controller;
use App\Models\permintaansurat;
use Illuminate\Http\Request;

class RekapLaporanController extends Controller
{
    public function index()
    {
       
        $list_permintaan_surat = permintaansurat::where('status', 2)
            ->orWhere('status', 3)
            ->orderByDesc('updated_at')
            ->get();

        return view('Kepaladesa.laporan.index', compact('list_permintaan_surat'));
    }
}
