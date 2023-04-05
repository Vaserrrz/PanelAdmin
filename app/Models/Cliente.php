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
}
