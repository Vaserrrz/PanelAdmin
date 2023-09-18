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

    public function remotas(){
        return $this->hasMany('App\Models\Remota');
    }
}