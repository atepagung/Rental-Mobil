<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'city', 'province_id'
    ];

    public function province()
    {
    	return $this->belongsTo(Province::class);
    }

    public function services()
    {
    	return $this->hasMany(Service::class);
    }
}
