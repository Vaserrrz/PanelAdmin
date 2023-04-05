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

    /**
     * Summary of remota
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function remota(){
        return $this->hasOne(Remota::class);
    }

    public function remotas(){
        return $this->hasMany('App\Models\Remota');
    }

    public function encargados(){
        return $this->hasMany('App\Models\Encargado');
    }

    public function encargado(){
        return $this->BelongsTo('App\Models\Encargado');
    }
}
