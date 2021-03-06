<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    //relacion 1 a 1
    //relaciono usuario con profile a traves de su clave foranea
    //devuelvo el profile como parte de user.$user->profile
    public function profile(){
        //metodo manual relacion
       // $profile= Profile::where('user_id',$this->id)->first();
        //return $profile;

        //otro metodo
        return $this->hasOne('App\Models\Profile');
    }

    //relacion 1 a n
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

    public function videos(){
        return $this->hasMany('App\Models\Video');
    }
    //relacion n a n
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }
     //relacion 1:1 polimorfica
     public function image(){
        return $this->MorphOne('App\Models\Image', 'imageable');
    }
}
