<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
       protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'password',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

          public function setFirstNameAttribute($value)
    {
    $this->attributes['firstname'] = 
        Str::of($value)->ucfirst();

    }


       public function setLastNameAttribute($value)
    {
    $this->attributes['lastname'] = 
        Str::of($value)->ucfirst();

}
