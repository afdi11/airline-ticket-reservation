<?php

namespace Database\Factories;

use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    protected $model = Flight::class;

    public function definition()
    {
        return [
            'flight_number' => $this->faker->unique()->numerify('FL####'),
            'destination' => $this->faker->city,
            'departure_time' => $this->faker->dateTime,
        ];
    }
}
