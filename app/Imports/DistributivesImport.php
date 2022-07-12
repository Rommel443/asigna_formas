<?php

namespace App\Imports;

use App\Distributive;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Illuminate\Contracts\Queue\ShouldQueue;

class DistributivesImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Distributive([
            'cedula' => $row['cedula'],
            'apellidos' => $row['apellido'],
            'nombres' => $row['nombre'],
            'fecha_programada_inicio' => $row['fecha_programada_inicio'],
            'asignatura' => $row['asignatura'],
            'duracion_prueba' => $row['duracion_prueba'],
            'tolerancia' => $row['tolerancia'],
            'laboratorio' => $row['laboratorio'],
            'amie' => $row['amie'],
            'institucion' => $row['institucion'],
            'aplicadorid' => $row['aplicadorid'],
            'aplicador' => $row['aplicador'],
            'forma' => $row['forma'],
            'parroquia_id' => $row['parroquia_id'],
            'period_id' => $row['period_id'],
            'sesion' => $row['sesion'],
            'coordinador' => $row['coordinador'],
            'tecnico' => $row['tecnico'],
            'supervisor' => $row['supervisor'],
            'corresponsal' => $row['corresponsal'],
            
        ]);
    }

    public function batchSize(): int
    {
        return 2000;           
        
    }

    public function chunkSize(): int
    {
        return 2000;           
        
    }

}
