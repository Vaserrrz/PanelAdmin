<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    //RELACION UNO A UNO
    public function remota(){
        return $this->hasOne('App\Models\Remota');
    }
}
