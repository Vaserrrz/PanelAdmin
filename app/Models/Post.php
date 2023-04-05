<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    //Relacion uno a muchos (inversa)
    public function user(){
        return $this->BelongsTo('App\Models\User');
    }

    public function categoria(){
        return $this->BelongsTo('App\Models\Categoria');
    }
}
