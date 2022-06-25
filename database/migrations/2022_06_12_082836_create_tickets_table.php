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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('source_city_id');
            $table->foreignId('dest_city_id');
            $table->foreignId('airline_id');
            $table->foreignId('class_flight_id');
            $table->string('ticket_code');
            $table->date('departure_date');
            $table->time('departure_time');
            $table->date('arrive_date');
            $table->time('arrive_time');
            $table->string('passenger_name');
            $table->string('flight_number');
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
        Schema::dropIfExists('tickets');
    }
};
