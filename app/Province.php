<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        'province',
    ];

    public function destinations()
    {
    	return $this->hasMany(Destination::class);
    }

    public function pickUp()
    {
    	return $this->hasMany(PickupPlace::class);
    }
}
