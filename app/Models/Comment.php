<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //relacion n:n polimorfica
    public function commentable(){
        return $this->morphTo();
    }

    //relacion n:1
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
