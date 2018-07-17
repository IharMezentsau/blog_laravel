<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 't_answer_message';
    protected $primaryKey = 'id';

    //const CREATED_AT = 'date';

    public $timestamps = false;

    /*public function message()
    {
        return $this->belongsTo('App\Message', 'message_id');
    }*/

}
