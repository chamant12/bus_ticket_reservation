<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function reservedBy(){
        return $this->hasOne(User::class);
    }

    public function passenger(){
        return $this->belongsTo(Passenger::class);
    }

    public function tour(){
        return $this->belongsTo(Tour::class);
    }

    public function departure(){
        return $this->hasOne(Station::class, 'id', 'depature_station_id');
    }

    public function arrival(){
        return $this->hasOne(Station::class,  'id', 'arrival_station_id');
    }
}
