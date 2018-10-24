<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'devvn_quanhuyen';

    public function city()
	{
	    return $this->belongsTo('App\City', 'matp');
	}
}
