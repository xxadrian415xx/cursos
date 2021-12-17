<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }
     //Relacion uno a uno Polimorfica
     public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }
    //Relacion uno a muchos Polimorfica
    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
    //Relacion muchos a muchos polimorfica
    public function posts(){
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
