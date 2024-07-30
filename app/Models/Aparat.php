<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Aparat extends Model
{

    use HasFactory;

    protected $table = 'aparat';
    protected $fillable = [
        'nama',
        'foto',
        'jabatan'
    ];

    function handleUploadImg()
    {
        $this->handleDeleteImg();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/aparat";
            $randomStr = Str::random(5);
            $filename = time() . "-" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteImg()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    public function handleEdit(array $data)
{
    // Perbarui data aparat
    $this->aparat = $data['aparat'] ?? $this->aparat;
    $this->nama = $data['nama'] ?? $this->nama;
    $this->jabatan = $data['jabatan'] ?? $this->jabatan;

    // Simpan data aparat yang diperbarui
    $this->save();

    // Tangani upload foto jika ada
    if (isset($data['foto']) && $data['foto']) {
        $this->handleUploadFoto($data['foto']);
    }
}
}
