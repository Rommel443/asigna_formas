<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
        'recibe', 'ref1', 'nref1', 'ref2', 'nref2', 'don1', 'ndon1', 'don2', 'ndon2', 'don3', 'ndon3', 'don4', 'ndon4', 'estado',
    ];

    public function user(){
        return $this->belongsTo('App\User');
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
