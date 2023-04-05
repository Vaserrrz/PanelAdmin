<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satelite extends Model
{
    use HasFactory;

    public function proveedores(){
        return $this->belongsTo('App\Models\Proveedores');
    }

    public function revendedores(){
        return $this->belongsTo('App\Models\Revendedores');
    }
}
