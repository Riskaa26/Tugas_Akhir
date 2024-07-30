<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\permintaansurat;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
       
        $list_permintaan_surat = permintaansurat::where('status', 2)
            ->orWhere('status', 3)
            ->orderByDesc('updated_at')
            ->get();

        return view('admin.laporan.index', compact('list_permintaan_surat'));
    }
}
