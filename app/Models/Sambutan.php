<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Sambutan extends Model
{

    use HasFactory;

    protected $table = 'sambutan';
    protected $fillable = [
        
        'foto',
        'sambutan',
        'nama',
        'jabatan'
    ];

    function handleUploadImg()
    {
        $this->handleDeleteImg();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/sambutan";
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
    // Perbarui data sambutan
    $this->sambutan = $data['sambutan'] ?? $this->sambutan;
    $this->nama = $data['nama'] ?? $this->nama;
    $this->jabatan = $data['jabatan'] ?? $this->jabatan;

    // Simpan data sambutan yang diperbarui
    $this->save();

    // Tangani upload foto jika ada
    if (isset($data['foto']) && $data['foto']) {
        $this->handleUploadFoto($data['foto']);
    }
}

}
