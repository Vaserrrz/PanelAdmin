<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    use HasFactory;

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }

    public function remotas(){
        return $this->hasOne('App\Models\Remota');
    }
}
