<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'days', 'nama_pemesan', 'email', 'phone', 'address', 'tgl_peminjaman', 'tgl_pengembalian', 'service_id', 'transaction_id', 'pickup_address', 'status', 'discount'
    ];

    public function unit()
    {
    	return $this->belongsTo(Unit::class);
    }

    public function service()
    {
    	return $this->belongsTo(Service::class);
    }
}
