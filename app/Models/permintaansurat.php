<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class permintaansurat extends Model
{
    protected $table = 'permintaan_surat';
    protected $fillable = [
        'id',
        'tanggal',
        'nik_penduduk',
        'nama',
        'jenis_surat',
        'status',


    ];
    function handLeUploadPdf()
    {
        $this->handleDeletePdf();
        if (request()->hasFile('file_pdf')) {
            $file_pdf = request()->file('file_pdf');
            $destination = "laporan/permintaan_surat";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $file_pdf->extension();
            $url = $file_pdf->storeAs($destination, $filename);
            $this->file_pdf = "app/" . $url;
            $this->save();
        }
    }

    function handleDeletePdf()
    {
        $file_pdfhandleDeletePdf = $this->file_pdfhandleDeletePdf;
        if ($file_pdfhandleDeletePdf) {
            $path = public_path($file_pdfhandleDeletePdf);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    function handleEdit(array $data)
    {
        $this->update($data); // Update the model with the provided data
        if (isset($data['pdfhandleDeletePdf'])) {
            $this->handleUploadpdfhandleDeletePdf(); // If pdfhandleDeletePdf is provided, handle the upload
        }
    }

    public function dataPenduduk()
    {
        return $this->belongsTo(DataPenduduk::class, 'nik_penduduk', 'nik');
    }

}
