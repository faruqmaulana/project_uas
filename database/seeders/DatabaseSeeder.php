<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Airline;
use App\Models\ClassFlight;
use App\Models\DestCity;
use App\Models\FlightRoute;
use App\Models\SourceCity;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //seed airline
        Airline::create([
            'name' => 'Air Asia',
            'logo' => 'AirAsia.png'
        ]);
        Airline::create([
            'name' => 'Canada',
            'logo' => 'Canada.png'
        ]);
        Airline::create([
            'name' => 'Cebu',
            'logo' => 'Cebu.png'
        ]);
        Airline::create([
            'name' => 'Fly Emirates',
            'logo' => 'Emirates.png'
        ]);
        Airline::create([
            'name' => 'Japan',
            'logo' => 'Japan.png'
        ]);
        Airline::create([
            'name' => 'Malaysia Airlines',
            'logo' => 'Malaysia_Airlines.png'
        ]);
        Airline::create([
            'name' => 'Qatar Airways',
            'logo' => 'Qatar.png'
        ]);
        Airline::create([
            'name' => 'Saudi',
            'logo' => 'Saudi.png'
        ]);
        Airline::create([
            'name' => 'Singapore',
            'logo' => 'Singapore.png'
        ]);
        Airline::create([
            'name' => 'Turkish',
            'logo' => 'Turkish.png'
        ]);
        Airline::create([
            'name' => 'United',
            'logo' => 'United.png'
        ]);

        ClassFlight::create([
            'class_name' => 'Economy'
        ]);
        ClassFlight::create([
            'class_name' => 'Business'
        ]);

        //random flight route
        FlightRoute::factory(10000)->create();

        //seed source city
        SourceCity::create([
            'source_city_name' => 'Surabaya',
            'source_city_airport' => 'Juanda Airport'
        ]);
        SourceCity::create([
            'source_city_name' => 'Makassar',
            'source_city_airport' => 'Sultan Hassanudin Airport'
        ]);
        SourceCity::create([
            'source_city_name' => 'Jakarta',
            'source_city_airport' => 'Soekarno-Hatta Airport'
        ]);
        SourceCity::create([
            'source_city_name' => 'Yogyakarta',
            'source_city_airport' => 'Adisutjipto Airport'
        ]);
        SourceCity::create([
            'source_city_name' => 'Denpasar',
            'source_city_airport' => 'I Gusti Ngurah Rai Airport'
        ]);
        SourceCity::create([
            'source_city_name' => 'Ambon',
            'source_city_airport' => 'Pattimura Airport'
        ]);
        SourceCity::create([
            'source_city_name' => 'Jayapura',
            'source_city_airport' => 'Sentani Airport'
        ]);
        SourceCity::create([
            'source_city_name' => 'Balikpapan',
            'source_city_airport' => 'Sultan Aji Muhammad Airport'
        ]);
        SourceCity::create([
            'source_city_name' => 'Lombok',
            'source_city_airport' => 'Lombok International Airport'
        ]);
        SourceCity::create([
            'source_city_name' => 'Manado',
            'source_city_airport' => 'Sam Ratulangi Airport'
        ]);

        //seed destination city
        DestCity::create([
            'dest_city_name' => 'Surabaya',
            'dest_city_airport' => 'Juanda Airport'
        ]);
        DestCity::create([
            'dest_city_name' => 'Makassar',
            'dest_city_airport' => 'Sultan Hassanudin Airport'
        ]);
        DestCity::create([
            'dest_city_name' => 'Jakarta',
            'dest_city_airport' => 'Soekarno-Hatta Airport'
        ]);
        DestCity::create([
            'dest_city_name' => 'Yogyakarta',
            'dest_city_airport' => 'Adisutjipto Airport'
        ]);
        DestCity::create([
            'dest_city_name' => 'Denpasar',
            'dest_city_airport' => 'I Gusti Ngurah Rai Airport'
        ]);
        DestCity::create([
            'dest_city_name' => 'Ambon',
            'dest_city_airport' => 'Pattimura Airport'
        ]);
        DestCity::create([
            'dest_city_name' => 'Jayapura',
            'dest_city_airport' => 'Sentani Airport'
        ]);
        DestCity::create([
            'dest_city_name' => 'Balikpapan',
            'dest_city_airport' => 'Sultan Aji Muhammad Airport'
        ]);
        DestCity::create([
            'dest_city_name' => 'Lombok',
            'dest_city_airport' => 'Lombok International Airport'
        ]);
        DestCity::create([
            'dest_city_name' => 'Manado',
            'dest_city_airport' => 'Sam Ratulangi Airport'
        ]);
    }
}
