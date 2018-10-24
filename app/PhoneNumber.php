<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
	protected $table = 'phone_numbers';
    protected $fillable = ['region_code','country_code','national_number','e164_format','user_id'];

    public function user(){
    	return $this->belongTo('App\User');
    }
}
