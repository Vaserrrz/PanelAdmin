<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satelite extends Model
{
    use HasFactory;

    public function proveedor(){
        return $this->belongsTo('App\Models\Proveedor');
    }

    public function revendedores(){
        return $this->belongsTo('App\Models\Revendedor');
    }

    public function planes(){
        return $this->hasMany('App\Models\Plan');
    }

    public function remotas(){
        return $this->hasMany('App\Models\Remota');
    }


}
