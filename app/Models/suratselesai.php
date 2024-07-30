<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class suratselesai extends Model
{
    protected $table = 'surat_selesai';
    protected $fillable = [
        'id',
        'tanggal',
        'no_surat',
        'nik',
        'nama',
        'jenis_surat',
        'status',
       
        
    ];
    function handleUploadPdf()
   {
       $this->handleDeletePdf();
       if (request()->hasFile('file_pdf')) {
           $file_pdf = request()->file('file_pdf');
           $destination = "laporan/surat_selesai";
           $randomStr = Str::random(5);
           $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $file_pdf->extension();
           $url = $file_pdf->storeAs($destination, $filename);
           $this->file_pdf = "app/" . $url;
           $this->save();
       }
   }

   function handleDeletePdf()
   {
       $file_pdf = $this->file_pdf;
       if ($file_pdf) {
           $path = public_path($file_pdf);
           if (file_exists($path)) {
               unlink($path);
           }
           return true;
       }
   }

     function handleEdit(array $data)
    {
        $this->update($data); // Update the model with the provided data
        if (isset($data['foto'])) {
            $this->handleUploadPdf(); // If foto is provided, handle the upload
        }
    }

    function DataPenduduk(){
		return $this->belongsTo(DataPenduduk::class, 'nik');
	}

}
