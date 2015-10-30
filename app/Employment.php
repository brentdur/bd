<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $fillable = [
    	'employer',
    	'title',
    	'body',
    	'start_date',
    	'end_date'
    ];

    
}
