<?php

namespace App\Exports;

use App\Distributive;
use Maatwebsite\Excel\Concerns\FromCollection;

class DistributivesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Distributive::all();
    }
}
