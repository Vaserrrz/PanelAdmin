<?php

namespace App\Models;

use App\Models\Revendedor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use function PHPUnit\Framework\returnValueMap;

class Remota extends Model
{
    use HasFactory;

    public function plan(){
      /*$plan = Plan::find($this->PLAN_ID);*/
      return $this->BelongsTo(Plan::class);
    }

    public function proveedor(){
        return $this->BelongsTo('App\Models\Proveedor');
    }

    public function cliente(){
        return $this->BelongsTo(Cliente::class);
    }

    public function satelite(){
        return $this->hasOne(Satelite::class);
    }

    public function revendedor(){
        return $this->hasOne(Revendedor::class);
    }

    public function encargado(){
        return $this->hasOne(Encargado::class);
    }

    public function socio(){
        return $this->hasOne(Socio::class);
    }
}
