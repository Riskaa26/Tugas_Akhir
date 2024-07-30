<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\permintaansurat;
use App\Models\suratselesai;
use Illuminate\Http\Request;

class suratselesaiController extends Controller
{
    /**
     * Menampilkan daftar resource.
     */
    public function index()
    {
        $data ['list_permintaan_surat'] = permintaansurat :: all();
        // return $data;
        return view('admin.surat_selesai.index', $data);
    }

    /**
     * Menampilkan form untuk membuat resource baru.
     */
    public function create()
    {
        return view('admin.surat_selesai.create');
    }

    /**
     * Menyimpan resource yang baru dibuat.
     */
    public function store(Request $request)
    {
        $surat_selesai = new suratselesai();
        $surat_selesai->tanggal = request('tanggal');
        $surat_selesai->no_surat = request('no_surat');
        $surat_selesai->nik = request('nik');
        $surat_selesai->nama = request('nama');
        $surat_selesai->jenis_surat = request('jenis_surat');
        $surat_selesai->status = request('status');

        $surat_selesai->handleUploadPdf();
        $surat_selesai->save();

        return redirect('surat_selesai')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Menampilkan resource yang spesifik.
     */
    public function show(string $id)
    {
        return view('admin.surat_selesai.show', [
            'suratselesai' => suratselesai::findOrFail($id),
        ]);
    }

    /**
     * Menampilkan form untuk mengedit resource yang spesifik.
     */
    public function edit(string $id)
    {
        $surat_selesai = suratselesai::findOrFail($id);
        return view('admin.surat_selesai.edit', compact('surat_selesai'));
    }

    /**
     * Memperbarui resource yang spesifik di storage.
     */
    public function update(Request $request, string $id)
    {
        $surat_selesai = suratselesai::findOrFail($id);
        $surat_selesai->update($request->all());

        $surat_selesai->handleUploadPdf();

        return redirect()->route('surat-selesai.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Menghapus resource yang spesifik dari storage.
     */
    public function destroy(string $id)
    {
        $surat_selesai = suratselesai::findOrFail($id);
        $surat_selesai->handleDeletePdf();
        $surat_selesai->delete();
        return redirect('surat-selesai')->with('danger', 'Data Berhasil Dihapus');
    }
    public function cetak($permintaan_surat) {
        $data ['permintaan_surat'] = permintaansurat::find($permintaan_surat);
        return view('Admin.surat_selesai.cetak', $data);
    }
    
}
