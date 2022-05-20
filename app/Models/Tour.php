<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    public function startStation(){
        return $this->belongsTo(Station::class);
    }

    public function tourStationXref(){
        return $this->hasOne(TourStationXref::class);
    }
}
