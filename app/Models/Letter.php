<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;

    protected $guarded = [];

//    public function item() :BelongsTo
//    {
//        return $this->belongsTo(Driver::class, 'driver_id', 'id');
//    }
//
//    public function vehicle() :BelongsTo
//    {
//        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
//    }

}
