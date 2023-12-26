<?php
// database/migrations/xxxx_xx_xx_create_trips_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->date('trip_date');
            $table->string('origin');
            $table->string('destination');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
