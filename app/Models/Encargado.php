<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    use HasFactory;
    public function remota(){
        return $this->hasOne(Remota::class);
    }

    public function cliente(){
        return $this->BelongsTo('App\Models\Cliente');
    }

    public function clientes(){
        return $this->hasOne('App\Models\Cliente');
    }
}
