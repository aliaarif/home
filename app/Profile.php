<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded = [];

	protected $casts = [
		'details' => 'array',
	];

	public function user(){
		return $this->belongsTo('App\User');
	}
}
