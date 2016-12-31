<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

    protected $fillable = [
        'user_id' ,
        'problem_id' ,
        'lang_id' ,
        'source_code' ,
        /*  fill after judge*/
        'result' ,
        'stdout' ,
        'stderr' ,
        'judged'
    ];

}

