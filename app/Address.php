<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';
    protected $fillable = ['city','district','ward','street','user_id'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
