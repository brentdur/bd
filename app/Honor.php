<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Honor extends Model
{
   protected $fillable = [
    	'title',
    	'where',
    	'time',
    	'what'
    ]; 
}
