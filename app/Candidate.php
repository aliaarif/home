<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
	protected $guarded = [];

	public function categories(){
		return $this->hasMany('App\Category');
	}
}
