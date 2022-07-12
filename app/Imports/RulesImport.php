<?php

namespace App\Imports;

use App\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Illuminate\Contracts\Queue\ShouldQueue;

class RulesImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Rule([
            'asignatura' => $row['asignatura'],
            'period_id' => $row['period_id'],
            'forma' => $row['forma'],
            'fecha' => $row['fecha'],
            'sesion' => $row['sesion'],
        ]);
    }


    public function batchSize(): int
    {
        return 4000;           
        
    }

    public function chunkSize(): int
    {
        return 4000;           
        
    }
}
