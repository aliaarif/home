<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
	protected $guarded = [];

	public function country(){
		return $this->belongsTo('App\Country');
	}

	public function state(){
		return $this->belongsTo('App\State');
	}

}
