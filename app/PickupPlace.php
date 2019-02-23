<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PickupPlace extends Model
{

	protected $table = "pickup_places";

    protected $fillable = [
        'city', 'province_id'
    ];

    public function services()
    {
    	return $this->hasMany(Service::class);
    }

    public function province()
    {
    	return $this->belongsTo(Province::class);
    }
}
