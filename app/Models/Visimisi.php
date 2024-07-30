<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Visimisi extends Model
{
    use HasFactory;

    protected $table = 'visimisi';
    protected $fillable = [
        'foto',
        'desa',
        'visi',
        'misi'
    ];

    /**
     * Handle the upload of the image and save it.
     */
    public function handleUploadImg()
    {
        $this->handleDeleteImg(); // Delete the old image if it exists

        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = 'images/visimisi';
            $randomStr = Str::random(5);
            $filename = time() . '-' . $randomStr . '.' . $foto->extension();
            $url = $foto->storeAs($destination, $filename, 'public');
            $this->foto = 'app/' . $url;
            $this->save();
        }
    }

    /**
     * Delete the old image if it exists.
     */
    public function handleDeleteImg()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }

    /**
     * Update the model's data and handle the image upload.
     *
     * @param array $data
     */
    public function handleEdit(array $data)
    {
        // Update the model's attributes
        $this->desa = $data['desa'] ?? $this->desa;
        $this->visi = $data['visi'] ?? $this->visi;
        $this->misi = $data['misi'] ?? $this->misi;

        // Save the updated data
        $this->save();

        // Handle the image upload if a new image is provided
        if (isset($data['foto']) && $data['foto']) {
            $this->handleUploadImg(); // Use the existing method to handle the upload
        }
    }
}
