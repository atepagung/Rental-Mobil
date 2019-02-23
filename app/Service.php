<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'pickup_place_id', 'destination_id', 'rate_id', 'minimum_days', 'cost', 'service_class_id',
    ];

    public function rate()
    {
    	return $this->belongsTo(Rate::class);
    }

    public function service_class()
    {
    	return $this->belongsTo(ServiceClass::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function pickup_place()
    {
        return $this->belongsTo(PickupPlace::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
