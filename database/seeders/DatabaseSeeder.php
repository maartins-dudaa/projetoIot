<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\Sensor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void

    {
        $this->call([
            AmbienteSeeder::class,
            SensorSeeder::class,
            RegistroSeeder::class
        ]);
    }
}
