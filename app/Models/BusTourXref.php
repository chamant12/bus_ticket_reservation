<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusTourXref extends Model
{
    use HasFactory;

    protected $table = "bus_tour_xref";

    public function bus(){
        return $this->hasOne(Bus::class,'id','bus_id');
    }
}
