<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitType extends Model
{
    protected $table = 'unit_types';

    protected $fillable = [
        'type',
    ];

    public function units()
    {
    	return $this->hasMany(Unit::class);
    }
}
