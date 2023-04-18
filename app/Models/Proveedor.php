<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    public function satelites(){
        return $this->hasMany('App\Models\Satelite');
    }
    // Asi esta bien segun chatgpt sexo
    // public function satelites()
    // {
    //     return $this->hasMany(Satelite::class);
    // }

    public function planes(){
        return $this->hasMany('App\Models\Plan');
    }
    // public function satelites(){
    //     return $this->hasMany('App\Models\Satelite');
    // }

    // public function remotas(){
    //     return $this->hasMany('App\Models\Remota');
    // }


}
