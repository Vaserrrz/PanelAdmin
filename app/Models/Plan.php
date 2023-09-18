<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;


    public function remotas(){
        return $this->hasMany('App\Models\Remota');
    }


    //Relacion UNO A UNO: un plana tiene un solo proveedor
   /* public function proveedor(){
        return $this->hasOne('App\Models\Proveedor');
    }

    public function revendedor(){
        return $this->hasOne('App\Models\Revendedor');
    }*/



    //Relacion UNO a MUCHOS un proveedor puede tener varios planes
    public function proveedores(){
        return $this->belongsTo('App\Models\Proveedor');
    }


    public function revendedores(){
        return $this->belongsTo(Persona::class,'RESELLER_ID');
    }

    public function satelites(){
        return $this->belongsTo('App\Models\Satelite');
    }
}