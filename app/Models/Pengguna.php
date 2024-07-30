<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash; // For hashing passwords
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage; // For file storage operations

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = [
        'nama',
        'password',
        'foto', // Make sure this is fillable if you are updating this field
    ];

    public function handleUploadImg()
    {
        $this->handleDeleteImg();

        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/pengguna";
            $randomStr = Str::random(5);
            $filename = time() . "-" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename, 'public');
            $this->foto = $url;
            $this->save();
        }
    }

    public function handleDeleteImg()
    {
        if ($this->foto && Storage::disk('public')->exists($this->foto)) {
            Storage::disk('public')->delete($this->foto);
            return true;
        }

        return false;
    }

    public function handleEdit(array $data)
    {
        // Update the fields
        $this->nama = $data['nama'] ?? $this->nama;

        // Ensure password is hashed before saving
        if (isset($data['password']) && !empty($data['password'])) {
            $this->password = Hash::make($data['password']);
        }

        // Save the updated data
        $this->save();

        // Handle photo upload if provided
        if (isset($data['foto']) && $data['foto']) {
            $this->handleUploadImg();
        }
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
