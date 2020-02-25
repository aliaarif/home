<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
	protected $guarded = [];
	
    // Carbon instance fields
	protected $dates = ['created_at', 'updated_at', 'deleted_at'];

	// public function users(){
	// 	return $this->belognsToMany('App\User');
 //        // return $this->belongsToMany('App\User', 'user_role', 'role_id', 'user_id');
	// }
}
