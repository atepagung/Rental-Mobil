<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceClass extends Model
{
    protected $table = 'service_classes';

    protected $fillable = [
        'type', 'seat'
    ];

    public function services()
    {
    	return $this->hasMany(Service::class);
    }
}
