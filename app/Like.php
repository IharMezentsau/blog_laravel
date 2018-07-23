<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    protected $table = 't_like';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'user_id', 'message_id'
    ];

    public function message()
    {
        return $this->belongsTo('App\Message', 'message_id');
    }

    public function user()
    {
        return $this->belongsToMany('App\User', 't_user', 'user_id');
    }

}
