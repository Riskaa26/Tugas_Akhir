<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\DataPenduduk;
use App\Models\permintaansurat;
use Illuminate\Http\Request;

class permintaansuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data['list_permintaan_surat'] = permintaansurat::with('dataPenduduk')->get();
        // return $data;
        return view('Admin.permintaan_surat.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_data_penduduk'] = DataPenduduk::all();
        return view('Admin.permintaan_surat.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $permintaan_surat = new permintaansurat();
        $permintaan_surat->tanggal = request('tanggal');
        $permintaan_surat->nik = request('nik');
        $permintaan_surat->jenis_surat = request('jenis_surat');
        $permintaan_surat->status = 1;

        $permintaan_surat->handLeUploadPdf();
        $permintaan_surat->save();


        return redirect('permintaan-surat')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        // Temukan permintaan surat berdasarkan ID
        $permintaansurat = permintaansurat::findOrFail($id);
        // Ambil data penduduk berdasarkan nik yang ada di permintaan surat
        $dataPenduduk = DataPenduduk::where('nik', $permintaansurat->dataPenduduk->nik)->first();

        // Kirim data ke view
        return view('Admin.permintaan_surat.terima', [
            'permintaansurat' => $permintaansurat,
            'dataPenduduk' => $dataPenduduk,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $permintaan_surat = permintaansurat::findOrFail($id);
        return view('Admin.permintaan_surat.edit', compact('permintaan_surat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $permintaan_surat = permintaansurat::findOrFail($id);
        $permintaan_surat->no_surat = request('no_surat');
        $permintaan_surat->ttd_kepdes = request('ttd_kepdes');
        $permintaan_surat->status = request('status');

        $permintaan_surat->save();

        return redirect()->route('surat-selesai.index')->with('success', 'Data surat berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permintaan_surat = permintaansurat::findOrFail($id);
        $permintaan_surat->handleDeletePdf();
        $permintaan_surat->delete();
        return redirect('permintaan_surat')->with('danger', 'Data Berhasil Dihapus');
    }

    public function halamanTerima($id, Request $request)
    {

        // Temukan permintaan surat berdasarkan ID
        $permintaansurat = permintaansurat::findOrFail($id);
        // Ambil data penduduk berdasarkan nik yang ada di permintaan surat
        $dataPenduduk = DataPenduduk::where('nik', $permintaansurat->dataPenduduk->nik)->first();

        // Kirim data ke view
        return view('Admin.permintaan_surat.terima', [
            'permintaansurat' => $permintaansurat,
            'dataPenduduk' => $dataPenduduk,
        ]);
    }
    public function terima($id)
    {
        $permintaan_surat = PermintaanSurat::findOrFail($id);
        $permintaan_surat->no_surat = request('no_surat');
        $permintaan_surat->ttd_kepdes = request('ttd_kepdes');
        $permintaan_surat->status = 2; // atau kode status yang sesuai untuk "Diterima"
        $permintaan_surat->save();


        return redirect()->back()->with('success', 'Permintaan surat diterima.');
    }

    public function tolak($id)
    {
        $permintaan_surat = PermintaanSurat::findOrFail($id);
        
        $permintaan_surat->status = 3; // atau kode status yang sesuai untuk "Ditolak"
        $permintaan_surat->save();

        return redirect()->back()->with('success', 'Permintaan surat ditolak.');
    }


}