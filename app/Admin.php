<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';
    protected $primaryKey = 'passport_code';
    protected $fillable = [
        'email', 'password','passport_code', 'surnm_admin', 'name', 'lastnm_admin', 'srudying', 'birth_date', 'salary', 'fkclbid',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
