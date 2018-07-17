<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
//use Greabock\Tentacles\EloquentTentacle;

class Message extends Model
{
  //  use EloquentTentacle;

    protected $table = 't_message';
    protected $primaryKey = 'id';

    //const CREATED_AT = 'date';

    public $timestamps = false;

    public function answer(){
        return $this->hasMany('App\Answer', 'message_id');
    }

    public function like(){
        return $this->hasMany('App\Like', 'message_id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'user_id');
    }



}
