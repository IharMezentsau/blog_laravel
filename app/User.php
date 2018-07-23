<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{

    protected $table = 't_user';
    protected $primaryKey = 'id';

    //const CREATED_AT = 'date';

    public $timestamps = false;

    protected $fillable = [
        'name', 'email', 'password', 'id', 'familyname', 'date', 'sex'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}