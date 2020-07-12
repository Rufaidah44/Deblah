<?php

namespace App;

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
    protected $fillable = [
        'uid','name', 'email', 'password','role',
    ];

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

    public function roles()
    {
        return $this->belongsToMany('App\role'); 
    } 

    public function hasAnyRoles($roles)//check if it has any role
    {
        if($this->roles()->whereIn('name', $roles)->first())
        {
            return true;
        }
        return false;
    }

    public function hasRole($role)//check if it has a spacefic role
    {
        if($this->roles()->where('name', $role)->first())
        {
            return true;
        }
        return false;
    }

    public function servproviders()
     {
        return $this->belongsTo('App\ServProviders', 'uid', 'p_ID');
     }
}
