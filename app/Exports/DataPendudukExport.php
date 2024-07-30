<?php

namespace App\Exports;

use App\Models\DataPenduduk;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataPendudukExport implements FromCollection
{
    public function collection()
    {
        return DataPenduduk::all();
    }
}
