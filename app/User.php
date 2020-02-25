<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    


    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function roleName(){
        return strtolower($this->role);
    }

    public function profile(){
        return $this->hasOne('App\Profile');
    }
    
    public function roles(){
        return $this->belongsToMany('App\Role', 'user_role', 'user_id', 'role_id');
    }


    public function hasAnyRole($roles){
        if(is_array($roles)) {
            foreach ($roles as $role) {
                if($this->hasRole($role)){
                    return true;
                }
            }
        } else {
           if($this->hasRole($roles)){
            return true;
        }
    }

    return false;
}



public function hasRole($role) {
    if($this->roles()->where('name', $role)->first()) {
        return true;
    }
    return false;
}

public function tests(){
    return $this->belognsToMany('App\Test');
}

public function lang_pairs(){
    return $this->hasMany('App\LanguagePair');
}


public function settings(){
    return $this->hasOne('App\Setting');
}

public function hasAnyRoles($roles, $current){
    return in_array($current, $roles) ? true : false;
}


public function verifyUser()
{
  return $this->hasOne('App\VerifyUser');
}


}
