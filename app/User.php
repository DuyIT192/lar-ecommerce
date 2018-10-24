<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status','accept_dashboard','email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userDetail()
    {
        return $this->hasOne('App\UserDetail');
    }
    public function phoneNumber()
    {
        return $this->hasOne('App\PhoneNumber');
    }
    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    public function coverDateTime($item,$data)
    {
        $timeSign = \Carbon\Carbon::createFromTimeStamp(strtotime($item[$data]));
        return \Carbon\Carbon::parse($timeSign)->format('d/m/Y H:i:s');
    } 

    public function userBirthday($item,$data)
    {
       return \Carbon\Carbon::parse($item['data'])->format('d/m/Y ');
    }     
}
