<?php

namespace App\Exports;

use App\table;
use Maatwebsite\Excel\Concerns\FromCollection;



class BukuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return table::all();
    }
}
