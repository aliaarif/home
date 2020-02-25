<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
	protected $guarded = [];

	public function country(){
		return $this->belongsTo('App\Country');
	}

	public function state(){
		return $this->belongsTo('App\State');
	}

	public function district(){
		return $this->belongsTo('App\District');
	}

	public function city(){
		return $this->belongsTo('App\City');
	}

}
