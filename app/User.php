<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password','photo_id', 'is_active', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }


    public function setPasswordAttribute($pass){
        if(!empty($pass)){
            $this->attributes['password'] = bcrypt($pass);
        }
    }

    public function isAdmin(){
        if($this->role->name == 'administrator'){
            return true;
        }
        return false;
    }
    public function isActive(){
        if($this->is_active == 1){
            return true;
        }
        return false;
    }
}
