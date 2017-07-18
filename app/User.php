<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    public function hasAnyRole($roles){
        if(is_array($roles)){ //getting an array of roles
            foreach($roles as $role){
                if($this->hasRole($role)) {
                    return true;
                }

            }
        }
        else{
            if($this->hasRole($roles)){ //you have a single row of role
                return true;
            }
        }
        return false; //all other cases
    }

    public function hasRole($role){
        //get all the roles of this user where their role makes the row you have given it
        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }
}
