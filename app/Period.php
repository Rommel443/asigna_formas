<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'codigo', 'fecha_inicio_evaluacion', 'fecha_fin_evaluacion',
    ];

    public function distributive()
    {
        return $this->hasMany('App\Distributive');
    }

    public function rule()
    {
        return $this->hasMany('App\Rule');
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
