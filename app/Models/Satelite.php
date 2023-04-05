<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satelite extends Model
{
    use HasFactory;

    public function remota(){
        return $this->hasOne(Remota::class);
    }
}
