<?php

namespace App\Exports;

use App\Distributive;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class DistributivesExport implements FromCollection
{
    use Exportable;

    protected $distributives;

    public function __construct($distributives = null)
    {
        $this->distributives = $distributives;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function collection()
    {
        
        //return Distributive::all();
        //dd($distributives);
        return $this->distributives ?: Distributive::all();
        //return $this->distributives->all();
    }
}
