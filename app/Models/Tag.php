<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    //Relacion Muchos a Muchos polimorfica (inversa)
    public function posts(){
        return $this->morphedByMany('App\Models\Post', 'taggable');
    }
}
