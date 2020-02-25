<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	protected $guarded = [];

	public function state(){
		return $this->hasMany('App\State');
	}

	public function district(){
		return $this->hasMany('App\District');
	}

	public function city(){
		return $this->hasMany('App\City');
	}

}
