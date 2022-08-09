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

    public function havePermission($permission){
        
        foreach($this->roles as $role){
            if ($role['full-access'] == 'yes'){
                return true;
            }

            foreach($role->permissions as $perm){

                if ($perm->slug == $permission ){
                    return true;
                }

            }
                
        }

        return false;
        //return $this->roles;
    }
}
