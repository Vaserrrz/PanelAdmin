<?php

namespace App\Models;

use App\Models\Remota;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revendedor extends Model
{
    use HasFactory;
    public function satelites(){
        return $this->hasMany('App\Models\Satelite');
    }
}
