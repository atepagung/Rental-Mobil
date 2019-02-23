<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable = [
        'type', 'type_detail'
    ];

    public function services()
    {
    	return $this->hasMany(Service::class);
    }
}
