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
            'source_city_name' => 'Tuban'
        ]);
        SourceCity::create([
            'source_city_name' => 'Balikpapan'
        ]);
        SourceCity::create([
            'source_city_name' => 'Jakarta'
        ]);
        SourceCity::create([
            'source_city_name' => 'Lamongan'
        ]);
        SourceCity::create([
            'source_city_name' => 'Bali'
        ]);
        SourceCity::create([
            'source_city_name' => 'Yogyakarta'
        ]);
        SourceCity::create([
            'source_city_name' => 'Bandung'
        ]);
        SourceCity::create([
            'source_city_name' => 'Bekasi'
        ]);
        SourceCity::create([
            'source_city_name' => 'Lombok'
        ]);
        SourceCity::create([
            'source_city_name' => 'Tangerang'
        ]);

        //seed destination city
        DestCity::create([
            'dest_city_name' => 'Tuban'
        ]);
        DestCity::create([
            'dest_city_name' => 'Balikpapan'
        ]);
        DestCity::create([
            'dest_city_name' => 'Jakarta'
        ]);
        DestCity::create([
            'dest_city_name' => 'Lamongan'
        ]);
        DestCity::create([
            'dest_city_name' => 'Bali'
        ]);
        DestCity::create([
            'dest_city_name' => 'Yogyakarta'
        ]);
        DestCity::create([
            'dest_city_name' => 'Bandung'
        ]);
        DestCity::create([
            'dest_city_name' => 'Bekasi'
        ]);
        DestCity::create([
            'dest_city_name' => 'Lombok'
        ]);
        DestCity::create([
            'dest_city_name' => 'Tangerang'
        ]);
    }
}
