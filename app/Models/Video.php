<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    //Relacion Uno a Muchos polimorfica
    public function comments(){
        return $this->morphMany('App\Models\Commentable', 'commentable');
    }

    public function posts(){
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }

    //Relacion Muchos a Muchos polimorfica
    public function videos(){
        return $this->morphedByMany('App\Models\Video', 'taggable');
    }
}
