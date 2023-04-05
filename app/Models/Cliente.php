<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Summary of Cliente
 */
class Cliente extends Model
{
    use HasFactory;


    public function encargado(){
        return $this->hasOne('App\Models\Encargado');
    }

    /*public function Encargados(){
        return $this->hasMany('App\Models\Encargado');
    }*/

}
