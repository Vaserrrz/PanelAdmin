<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnValueMap;

class Remota extends Model
{
    use HasFactory;

    public function plan(){
        $plan = plan::find($this->PLAN_ID);
        return $this->belongsTo('App\Models\Plan');
    }
}
