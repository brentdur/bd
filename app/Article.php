<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

	protected $fillable = [
		'title',
		'body',
		'published_at'
	];
    

    public function setPublishedAtAttribute($date){

    	$this->attributes['published_at']->Carbon::createFromFormat('Y-m-d', $date);
    }

    public function scopePublished($query){
    	$query->where('published_at', '<=', Carbon::now());
    }
}
