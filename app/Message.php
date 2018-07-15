<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Message extends Model
{

    protected $table = 't_message';
    protected $primaryKey = 'id';

    const CREATED_AT = 'date';

    public $timestamps = false;


}
