<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributive extends Model
{
    protected $fillable = [
        'cedula', 'apellidos', 'nombres', 'fecha_programada_inicio', 'asignatura', 'duracion_prueba', 'tolerancia', 'laboratorio', 'amie', 'institucion', 'aplicadorid', 'aplicador', 'forma', 'parroquia_id', 'period_id', 'sesion', 'coordinador', 'tecnico', 'supervisor', 'corresponsal', 'corresponsal',

    ];

    public function period(){
        return $this->belongsTo('App\Period');
    }
}
