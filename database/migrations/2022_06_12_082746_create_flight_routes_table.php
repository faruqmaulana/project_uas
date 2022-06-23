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
        Schema::create('flight_routes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('airline_id');
            $table->foreignId('source_city_id');
            $table->foreignId('dest_city_id');
            $table->dateTime('departure_date');
            $table->dateTime('arrive_date');
            $table->string('class_flight_id');
            $table->integer('price');
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
        Schema::dropIfExists('flight_routes');
    }
};
