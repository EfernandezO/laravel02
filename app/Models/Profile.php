<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    //relacion 1 a 1
    //desde debil a fuerte

    public function user(){
        //$user=User::find($this->user_id);

        //return $user;

        return $this->belongsTo('App\Models\User');
    }
}
