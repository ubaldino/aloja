<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

    protected $fillable = [
        'source_code' ,
        'result' ,
        'stdout' ,
        'stderr' ,
        'judged' ,
        'user_id' ,
        'problem_id' ,
        'lang_id'
    ];

}

