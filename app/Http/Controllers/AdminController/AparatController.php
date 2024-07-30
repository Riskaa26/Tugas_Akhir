<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Aparat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AparatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_aparat'] = Aparat::all();
        return view('Admin.Aparat.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Aparat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

      

        // Create new aparat
        $aparat = new Aparat();
        $aparat->nama = $request->input('nama');
        $aparat->jabatan = $request->input('jabatan');
        $aparat->save();

        $aparat->handleUploadImg();

        log::info('Path foto: ' . $aparat->foto);

        // Redirect to index page with success message
        return redirect('admin/aparat-desa')->with('success', 'Data berhasil disimpan.');
    }

    public function show($id)
{
    // Ambil data aparat dari database berdasarkan ID
    $aparat = Aparat::findOrFail($id);

    // Kirim data aparat ke view show
    return view('Admin.Aparat.show', compact('aparat'));
}

public function edit($id)
{
    // Ambil data aparat dari database berdasarkan ID
    $aparat = Aparat::findOrFail($id);

    // Kirim data aparat ke view edit
    return view('Admin.Aparat.edit', compact('aparat'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'foto' => 'nullable|image|mimes:jpg,jpeg,png',
        'nama' => 'required',
        'jabatan' => 'required',
    ]);

    // Cari data aparat berdasarkan ID
    $aparat = Aparat::findOrFail($id);
    $aparat->nama = $request->input('nama');
    $aparat->jabatan = $request->input('jabatan');

    // Handle image upload
    if ($request->hasFile('foto')) {
        // Hapus foto lama jika ada
        if ($aparat->foto && file_exists(public_path('uploads/aparat-desa/' . $aparat->foto))) {
            unlink(public_path('uploads/aparat-desa/' . $aparat->foto));
        }
        // Unggah foto baru
        $file = $request->file('foto');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads/aparat-desa'), $filename);
        $aparat->foto = $filename;
    }

    $aparat->save();

    // Log the path of the uploaded image
    Log::info('Path foto: ' . $aparat->foto);

    // Redirect to index page with success message
    return redirect('admin/aparat-desa')->with('success', 'Data berhasil diperbarui.');
}

public function destroy($id)
{
    // Temukan data aparat berdasarkan ID
    $aparat = Aparat::find($id);

    // Pastikan data aparat ditemukan sebelum mencoba menghapus
    if ($aparat) {
        // Jika ada file foto yang terkait, hapus dari server
        if ($aparat->foto && file_exists(public_path('uploads/aparat-desa/' . $aparat->foto))) {
            unlink(public_path('uploads/aparat-desa/' . $aparat->foto));
        }

        // Hapus data aparat dari database
        $aparat->delete();

        // Redirect ke halaman daftar aparat dengan pesan sukses
        return redirect('admin/aparat-desa')->with('success', 'Data aparat berhasil dihapus.');
    } else {
        // Redirect ke halaman daftar aparat dengan pesan error
        return redirect('admin/aparat-desa')->with('error', 'Data aparat tidak ditemukan.');
    }
}

}
