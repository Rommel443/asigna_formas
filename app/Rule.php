<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = [
        'asignatura', 'period_id', 'forma', 'fecha', 'sesion',

    ];

    public function period(){
        return $this->belongsTo('App\Period');
    }
}
