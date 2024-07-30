<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PenggunaController extends Controller
{
    public function index()
    {
        $data['list_pengguna'] = Pengguna::all();
        return view('Admin.Pengguna.index', $data);
    }

    public function create()
    {
        return view('Admin.Pengguna.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'password' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $pengguna = new Pengguna();
        $pengguna->name = $request->input('nama');
        $pengguna->username = $request->input('username');
        $pengguna->email = $request->input('email');
        $pengguna->type = $request->input('type');
        $pengguna->password = $request->input('password');
        $pengguna->save();

        $this->handleUploadImg($pengguna);

        Log::info('Path foto: ' . $pengguna->foto);

        return redirect('admin/pengguna')->with('success', 'Data berhasil disimpan.');
    }

    public function show($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('Admin.Pengguna.show', compact('pengguna'));
    }

    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('Admin.Pengguna.edit', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
          
            'nama' => 'required',
            'password' => 'required',
            
        ]);

        $pengguna = Pengguna::findOrFail($id);
        $pengguna->nama = $request->input('nama');
        $pengguna->password = $request->input('password');

        if ($request->hasFile('foto')) {
            $this->handleDeleteImg($pengguna);
            $this->handleUploadImg($pengguna);
        }

        $pengguna->save();

        Log::info('Path foto: ' . $pengguna->foto);

        return redirect()->route('pengguna.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengguna = Pengguna::find($id);

        if ($pengguna) {
            $this->handleDeleteImg($pengguna);
            $pengguna->delete();

            return redirect('admin/pengguna')->with('success', 'Data pengguna berhasil dihapus.');
        } else {
            return redirect('admin/pengguna')->with('error', 'Data pengguna tidak ditemukan.');
        }
    }

    protected function handleUploadImg($pengguna)
    {
        if (request()->hasFile('foto')) {
            $file = request()->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/pengguna'), $filename);
            $pengguna->foto = $filename;
            $pengguna->save();
        }
    }

    protected function handleDeleteImg($pengguna)
    {
        if ($pengguna->foto && file_exists(public_path('uploads/pengguna/' . $pengguna->foto))) {
            unlink(public_path('uploads/pengguna/' . $pengguna->foto));
        }
    }
}
