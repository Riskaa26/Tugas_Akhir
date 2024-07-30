<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Sambutan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Pastikan untuk mengimpor Log

class SambutanController extends Controller
{
    public function index()
    {
        $list_sambutan = Sambutan::all();
        return view('Admin.Sambutan.index', compact('list_sambutan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Sambutan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Create new Sambutan
        $sambutan = new Sambutan();
        $sambutan->sambutan = $request->input('sambutan'); // Menggunakan 'sambutan' untuk kolom sambutan
        $sambutan->nama = $request->input('nama');
        $sambutan->jabatan = $request->input('jabatan');

        // Handle image upload
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/sambutan'), $filename);
            $sambutan->foto = $filename;
        }

        $sambutan->save();

        // Log the path of the uploaded image
        Log::info('Path foto: ' . $sambutan->foto);

        // Redirect to index page with success message
        return redirect('admin/sambutan')->with('success', 'Data berhasil disimpan.');
    }

    public function show($id)
{
    // Ambil data sambutan dari database berdasarkan ID
    $sambutan = Sambutan::findOrFail($id);

    // Kirim data sambutan ke view show
    return view('Admin.Sambutan.show', compact('sambutan'));
}


    public function edit($id)
    {
        // Ambil data sambutan dari database berdasarkan ID
        $sambutan = Sambutan::findOrFail($id);
    
        // Kirim data sambutan ke view edit
        return view('Admin.Sambutan.edit', compact('sambutan'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png',
            'sambutan' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
        ]);
    
        // Cari data sambutan berdasarkan ID
        $sambutan = Sambutan::findOrFail($id);
        $sambutan->sambutan = $request->input('sambutan');
        $sambutan->nama = $request->input('nama');
        $sambutan->jabatan = $request->input('jabatan');
    
        // Handle image upload
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($sambutan->foto && file_exists(public_path('uploads/sambutan/' . $sambutan->foto))) {
                unlink(public_path('uploads/sambutan/' . $sambutan->foto));
            }
            // Unggah foto baru
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/sambutan'), $filename);
            $sambutan->foto = $filename;
        }
    
        $sambutan->save();
    
        // Log the path of the uploaded image
        Log::info('Path foto: ' . $sambutan->foto);
    
        // Redirect to index page with success message
        return redirect()->route('sambutan.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
{
    // Temukan data sambutan berdasarkan ID
    $sambutan = Sambutan::find($id);

    // Pastikan data sambutan ditemukan sebelum mencoba menghapus
    if ($sambutan) {
        // Jika ada file foto yang terkait, hapus dari server
        if ($sambutan->foto && file_exists(public_path('uploads/sambutan/' . $sambutan->foto))) {
            unlink(public_path('uploads/sambutan/' . $sambutan->foto));
        }

        // Hapus data sambutan dari database
        $sambutan->delete();

        // Redirect ke halaman daftar sambutan dengan pesan sukses
        return redirect('admin/sambutan')->with('success', 'Data sambutan berhasil dihapus.');
    } else {
        // Redirect ke halaman daftar sambutan dengan pesan error
        return redirect('admin/sambutan')->with('error', 'Data sambutan tidak ditemukan.');
    }
}

    

}