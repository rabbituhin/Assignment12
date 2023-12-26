<?php
// database/migrations/xxxx_xx_xx_create_seat_allocations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatAllocationsTable extends Migration
{
    public function up()
    {
        Schema::create('seat_allocations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('seat_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('seat_allocations');
    }
}
