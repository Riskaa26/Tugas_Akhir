<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Visimisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VisimisiController extends Controller
{
    public function index()
    {
        $list_visimisi = Visimisi::all();
        return view('Admin.Visimisi.index', compact('list_visimisi'));
    }

    public function create()
    {
        return view('Admin.Visimisi.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        //     'desa' => 'required|string|max:255',
        //     'visi' => 'required|string|max:255',
        //     'misi' => 'required|string|max:255',
        // ]);

        $visimisi = new Visimisi();
        $visimisi->desa = $request->input('desa');
        $visimisi->visi = $request->input('visi');
        $visimisi->misi = $request->input('misi');

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/visimisi'), $filename);
            $visimisi->foto = $filename;
        }

        $visimisi->save();

        Log::info('Path foto: ' . $visimisi->foto);

        return redirect('admin/visimisi')->with('success', 'Data berhasil disimpan.');
    }

    public function show($id)
    {
        $visimisi = Visimisi::findOrFail($id);
        return view('Admin.Visimisi.show', compact('visimisi'));
    }

    public function edit($id)
    {
        $visimisi = Visimisi::findOrFail($id);
        return view('Admin.Visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'desa' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $visimisi = Visimisi::findOrFail($id);
        $visimisi->desa = $request->input('desa');
        $visimisi->visi = $request->input('visi');
        $visimisi->misi = $request->input('misi');

        if ($request->hasFile('foto')) {
            if ($visimisi->foto && file_exists(public_path('uploads/visimisi/' . $visimisi->foto))) {
                unlink(public_path('uploads/visimisi/' . $visimisi->foto));
            }

            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/visimisi'), $filename);
            $visimisi->foto = $filename;
        }

        $visimisi->save();

        Log::info('Path foto: ' . $visimisi->foto);

        return redirect()->route('visimisi.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $visimisi = Visimisi::find($id);

        if ($visimisi) {
            if ($visimisi->foto && file_exists(public_path('uploads/visimisi/' . $visimisi->foto))) {
                unlink(public_path('uploads/visimisi/' . $visimisi->foto));
            }

            $visimisi->delete();

            return redirect('admin/visimisi')->with('success', 'Data visimisi berhasil dihapus.');
        } else {
            return redirect('admin/visimisi')->with('error', 'Data visimisi tidak ditemukan.');
        }
    }
}
