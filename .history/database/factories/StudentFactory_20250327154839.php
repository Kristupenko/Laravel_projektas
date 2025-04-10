<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\City;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'city_id' => City::inRandomOrder()->first()->id ?? 1, // Priskiria atsitiktinį miestą
        ];
    }
    public function definition(): array
    {
        $gimData = $this->faker->date('Y-m-d', '2005-12-31');
        $as
}
