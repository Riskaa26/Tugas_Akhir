<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Exports\DataPendudukExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\DataPenduduk;
use Illuminate\Http\Request;

class DataPendudukController extends Controller
{

    public function exportXls()
    {
        return Excel::download(new DataPendudukExport, 'data_penduduk.xlsx');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data ['list_data_penduduk'] = DataPenduduk:: all();
        return view('Admin.Data-Penduduk.index', $data );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Data-Penduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input, termasuk pengecekan NIK unik
        $request->validate([
            'nik' => 'required|unique:data_penduduk,nik',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'jalan' => 'required',
            'dusun' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'no_kk' => 'required',
            'pendidikan_di_kk' => 'required',
            'pendidikan_terakhir' => 'required',
            'pendidikan_ditempuh' => 'required',
            'pekerjaan' => 'required',
            'status_perkawinan' => 'required',
            'status_dlm_keluarga' => 'required',
            'status_penduduk' => 'required',
            'kewarganegaraan' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
        ], [
            'nik.unique' => 'NIK duplikat. Harap periksa kembali.',
            // Pesan error lainnya jika diperlukan
        ]);
    
        // Simpan data setelah validasi berhasil
        $data_penduduk = new DataPenduduk();
        $data_penduduk->nik = $request->input('nik');
        $data_penduduk->nama = $request->input('nama');
        $data_penduduk->tempat_lahir = $request->input('tempat_lahir');
        $data_penduduk->tanggal_lahir = $request->input('tanggal_lahir');
        $data_penduduk->jenis_kelamin = $request->input('jenis_kelamin');
        $data_penduduk->alamat = $request->input('alamat');
        $data_penduduk->agama = $request->input('agama');
        $data_penduduk->jalan = $request->input('jalan');
        $data_penduduk->dusun = $request->input('dusun');
        $data_penduduk->rt = $request->input('rt');
        $data_penduduk->rw = $request->input('rw');
        $data_penduduk->desa = $request->input('desa');
        $data_penduduk->kecamatan = $request->input('kecamatan');
        $data_penduduk->kota = $request->input('kota');
        $data_penduduk->no_kk = $request->input('no_kk');
        $data_penduduk->pendidikan_di_kk = $request->input('pendidikan_di_kk');
        $data_penduduk->pendidikan_terakhir = $request->input('pendidikan_terakhir');
        $data_penduduk->pendidikan_ditempuh = $request->input('pendidikan_ditempuh');
        $data_penduduk->pekerjaan = $request->input('pekerjaan');
        $data_penduduk->status_perkawinan = $request->input('status_perkawinan');
        $data_penduduk->status_dlm_keluarga = $request->input('status_dlm_keluarga');
        $data_penduduk->status_penduduk = $request->input('status_penduduk');
        $data_penduduk->kewarganegaraan = $request->input('kewarganegaraan');
        $data_penduduk->nama_ayah = $request->input('nama_ayah');
        $data_penduduk->nama_ibu = $request->input('nama_ibu');
    
        // Panggil metode untuk mengunggah foto
        $data_penduduk->handLeUploadFoto();
    
        // Simpan data ke database
        $data_penduduk->save();
    
        return redirect('data-penduduk')->with('success', 'Data Berhasil Disimpan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $nik)
    {
        return view('Admin.Data-Penduduk.show', [
            'datapenduduk' => DataPenduduk::findOrFail($nik),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nik)
{
    $penduduk = DataPenduduk::findOrFail($nik);
    return view('Admin.Data-Penduduk.edit', compact('penduduk'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nik)
    {
        $data_penduduk = new DataPenduduk();
        $data_penduduk->nik = request('nik');
        $data_penduduk->nama = request('nama');
        $data_penduduk->tempat_lahir = request('tempat_lahir');
        $data_penduduk->tanggal_lahir = request('tanggal_lahir');
        $data_penduduk->jenis_kelamin = request('jenis_kelamin');
        $data_penduduk->alamat = request('alamat');
        $data_penduduk->agama = request('agama');
        $data_penduduk->jalan = request('jalan');
        $data_penduduk->dusun = request('dusun');
        $data_penduduk->rt = request('rt');
        $data_penduduk->rw = request('rw');
        $data_penduduk->desa = request('desa');
        $data_penduduk->kecamatan = request('kecamatan');
        $data_penduduk->kota = request('kota');
        $data_penduduk->no_kk = request('no_kk');
        $data_penduduk->pendidikan_di_kk = request('pendidikan_di_kk');
        $data_penduduk->pendidikan_terakhir = request('pendidikan_terakhir');
        $data_penduduk->pendidikan_ditempuh =request('pendidikan_ditempuh');
        $data_penduduk->pekerjaan = request('pekerjaan');
        $data_penduduk->status_perkawinan = request('status_perkawinan');
        $data_penduduk->status_dlm_keluarga = request('status_dlm_keluarga');
        $data_penduduk->status_penduduk = request('status_penduduk');
        $data_penduduk->kewarganegaraan = request('kewarganegaraan');
        $data_penduduk->nama_ayah = request('nama_ayah');
        $data_penduduk->nama_ibu = request('nama_ibu');

        $data_penduduk = DataPenduduk::findOrFail($nik);
        $data_penduduk->update($request->all());

        return redirect()->route('data-penduduk.index')  ->with('success', 'Data penduduk berhasil diupdate');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nik)
    {
        $data_penduduk = DataPenduduk::find($nik);
        $data_penduduk->handleDelete();
        $data_penduduk->delete();
        return redirect('data-penduduk')->with('danger', 'Data Berhasil Dihapus');
    }

    
}
