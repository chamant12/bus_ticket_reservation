<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourStationXref extends Model
{
    use HasFactory;
    protected $table = "tour_station_xref";

    public function tour(){
        return $this->belongsTo(Tour::class);
    }

    public function station(){
        return $this->belongsTo(Station::class);
    }
}
