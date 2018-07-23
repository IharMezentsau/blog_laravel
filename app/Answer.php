<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 't_answer_message';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'date', 'user_id', 'message_id', 'answer'
    ];


}
