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
