<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	protected $guarded = [];


	public function country(){
		return $this->belongsTo('App\Country');
	}
	
	public function district(){
		return $this->hasMany('App\District');
	}

	public function city(){
		return $this->hasMany('App\City');
	}




}
