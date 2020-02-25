<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LanguagePair extends Model
{
	protected $guarded = [];
	
	public function user(){
		return $this->belongsTo('App\User');
	}
}

