<?php

namespace App\Http\Controllers\FrontController;

use App\Http\Controllers\Controller;
use App\Models\Aparat;
use App\Models\DataPenduduk;
use App\Models\permintaansurat;
use App\Models\Sambutan;
use Illuminate\Http\Request;

class WebController extends Controller
{

    function index(Request $request)
    {
        $kepalaDesa = Aparat::where('jabatan', 'Kepala Desa')->first();
        $aparat = Aparat::where('jabatan', '!=', 'Kepala Desa')->get();
        $sambutan = Sambutan::first();
        return view("Front.home", compact('kepalaDesa', 'aparat', 'sambutan'));
    }
    
    
    function surat()
    {
        return view("Front.surat");
    }

    function panduan()
    {
        return view("Front.panduan");
    }

    function berita()
    {
        return view("Front.berita");
    }
    function ceknik(Request $request)
    {
        $keperluan = $request->input('jenis_surat');
        return view('front.ceknik', compact('keperluan'));
    }
    public function pengajuanSurat(Request $request)
    {
        $nik = $request->input('nik_penduduk');
        $keperluan = $request->input('jenis_surat');
        $dataPenduduk = DataPenduduk::where('nik', $nik)->first();

        if ($dataPenduduk) {
            return view('front.pengajuan_surat', compact('dataPenduduk', 'keperluan'));
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }
    function storeSurat(Request $request)
    {
        $request->validate([
            'nik_penduduk' => 'required|exists:data_penduduk,nik',
            'jenis_surat' => 'required|string'
        ]);

        $permintaan_surat = new permintaansurat();
        $permintaan_surat->nik_penduduk = $request->input('nik_penduduk');
        $permintaan_surat->jenis_surat = $request->input('jenis_surat');
        $permintaan_surat->status = 1; // atau status default lainnya
        $permintaan_surat->save();

        return redirect('buat-surat')->with('success', 'Berhasil membuat surat. Silahkan ambil surat di Kantor Desa 2-3 hari kerja ');
    }
}
