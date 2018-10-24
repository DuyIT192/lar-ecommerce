<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'devvn_tinhthanhpho';

    public function districts()
    {
    	return $this->hasMany('App\District','matp');
    }
}
