<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'regno','phone','type','in_session',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getGravatarAttribute()
     {
       $hash = md5(strtolower(trim($this->attributes['email']))).'?s=40d';
       return "http://www.gravatar.com/avatar/$hash";
     }

     public function program()
     {
      return $this->belongsTo('App\Programme');
     }

     public function faculty()
     {
       return $this->belongsTo('App\Faculty');
     }

     public function year()
     {
       return $this->belongsTo('App\Year');
     }

}
