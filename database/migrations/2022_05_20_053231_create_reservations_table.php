<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('passenger_id');
            $table->unsignedBigInteger('tour_id');
            $table->unsignedBigInteger('depature_station_id');
            $table->unsignedBigInteger('arrival_station_id');
            $table->unsignedBigInteger('reserved_by');
            $table->foreign('passenger_id')->references('id')->on('passengers')->onDelete('cascade');
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('restrict');
            $table->foreign('depature_station_id')->references('id')->on('stations')->onDelete('restrict');
            $table->foreign('arrival_station_id')->references('id')->on('stations')->onDelete('restrict');
            $table->foreign('reserved_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
