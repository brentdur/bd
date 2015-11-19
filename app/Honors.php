<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Honors extends Model
{
   protected $fillable = [
    	'title',
    	'where',
    	'time',
    	'what'
    ]; 
}
