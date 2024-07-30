<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DataPenduduk extends Model
{
    protected $table = 'data_penduduk';
    protected $primaryKey = 'nik';
	public $incrementing = false;
    protected $fillable = [
        'id',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'agama',
        'jalan',
        'dusun',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'kota',
        'no_kk',
        'pendidikan_di_kk',
        'pendidikan_terakhir',
        'pendidikan_di_tempuh',
        'pekerjaan',
        'status_perkawinan',
        'status_dlm_keluarga',
        'status_penduduk',
        'kewarganegaraan',
        'nama_ayah',
        'nama_ibu'

    ];
    function handLeUploadFoto()
    {

        $this->handleDelete();
        if (request()->hasfile('foto')) {
            $foto = request()->filr('foto');
            $destination = "images/data_penduduk";
            $randomstr = str::random(5);
            $filename = $this->id . "_" . time() . "_" . $randomstr . "." . $foto->extention();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "" . $url;
            $this->save();

        }
    }

    function handleDelete()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
        }
        return true;
    }

     function handleEdit(array $data)
    {
        $this->update($data); // Update the model with the provided data
        if (isset($data['foto'])) {
            $this->handleUploadFoto(); // If foto is provided, handle the upload
        }
    }

    function permintaansurat(){
		return $this->hasMany(PermintaanSurat::class, 'nik');
	}

    function suratselesai(){
		return $this->belongsTo(suratselesai::class, 'nik');
	}

}
