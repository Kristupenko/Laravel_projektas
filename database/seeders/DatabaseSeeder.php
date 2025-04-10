<?php

use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\StudentSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Pirmiausia užpildome miestus
        $this->call(CitySeeder::class);

        // Tik tada užpildome studentus
        $this->call(StudentSeeder::class);
    }
}

