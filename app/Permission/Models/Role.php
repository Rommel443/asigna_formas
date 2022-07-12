<?php

namespace App\Permission\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //es: desde aqui
    protected $fillable = [
        'name', 'slug', 'descripcion', 'full-access',
    ];

    public function users(){
        return $this->belongsToMany('App\Users')->withTimesTamps();
    }

    public function permissions(){
        return $this->belongsToMany('App\Permission\Models\Permission')->withTimesTamps();
    }
}
