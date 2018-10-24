<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';
    protected $fillable = ['user_imager','name','gender','birthday','email','user_id'];

    public function user(){
    	return $this->belongTo('App\User');
    }
}
