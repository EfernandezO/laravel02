<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //relacion 1:n Polimorfica
    public function comment(){
        $this->morphMany('App\Models\Comment', 'Commentable');
    }
}
