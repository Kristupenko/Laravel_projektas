<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupe;

class GrupesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    

    public function run()
    {
        Grupe::insert([
            ['kodas' => 'G1', 'pavadinimas' => 'Informatika'],
            ['kodas' => 'G2', 'pavadinimas' => 'Matematika'],
            ['kodas' => 'G3', 'pavadinimas' => 'Fizika'],
        ]);
    }
    
}
