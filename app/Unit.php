<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'unit_type_id', 'unit'
    ];

    public function unit_type()
    {
    	return $this->belongsTo(UnitType::class);
    }

    public function bookings()
    {
    	return $this->hasMany(Booking::class);
    }
}
