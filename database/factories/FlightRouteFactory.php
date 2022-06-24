<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FlightRoute>
 */
class FlightRouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $hours = rand(1, 5);
        $startingDate = $this->faker->dateTimeBetween('next Monday', 'next Monday +10 days');
        $endingDate   = $this->faker->dateTimeBetween($startingDate, $startingDate->format('Y-m-d H:i:s') . ' +2' . $hours  . ' hours');

        return [
            'airline_id' => mt_rand(1, 11),
            'source_city_id' => mt_rand(1, 10),
            'dest_city_id' => mt_rand(1, 10),
            'departure_date' => $startingDate->format('Y-m-d'),
            'departure_time' => $startingDate->format('H:i:s'),
            'arrive_date' => $endingDate->format('Y-m-d'),
            'arrive_time' => $endingDate->format('H:i:s'),
            'class_flight_id' => mt_rand(1, 2),
            'price' => mt_rand(300, 500)
        ];
    }
}
