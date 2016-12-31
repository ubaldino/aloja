<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model {

    protected $fillable = [
        'number' , 'name' , 'slug_name' , 'description' , 'input' , 'output'
    ];

}
