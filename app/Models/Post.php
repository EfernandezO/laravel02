<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['name', 'body'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    //relacion 1:1 polimorfica

    public function image(){
        return $this->MorphOne('App\Models\Image', 'imageable');
    }

     //relacion 1:n Polimorfica
     public function comment(){
        $this->morphMany('App\Models\Comment', 'Commentable');
    }
}
