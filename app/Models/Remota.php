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

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }

    public function plan(){
        return $this->belongsTo('App\Models\Plan');
    }

    public function proveedor(){
        return $this->belongsTo('App\Models\Proveedor');
    }

    public function revendedor(){
        return $this->belongsTo(Persona::class,'RESELLER_ID','id');
    }

    public function satelite(){
        return $this->belongsTo('App\Models\Satelite');
    }

    public function socio(){
        return $this->belongsTo(Persona::class,'SOCIO_ID','id');
    }
}