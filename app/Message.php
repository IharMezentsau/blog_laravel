<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Message extends Model
{

    protected $table = 't_message';
    protected $primaryKey = 'id';

    protected $fillable = [
        'date', 'user_id', 'message'
    ];

    public $timestamps = false;

    public function answer(){
        return $this->hasMany('App\Answer', 'message_id');
    }

    public function like(){
        return $this->hasMany('App\Like', 'message_id');
    }





}
