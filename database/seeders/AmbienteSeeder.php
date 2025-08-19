<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AmbienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('pr_BR'); // criar dados fakes 

        for($i=1; $i <= 10; $i++){
            Ambiente::create([
                'nome' => 'Ambiente'.$i,
                'descricao' => $faker->sentence(), // cria uma descição qualquer
                'status' => $faker->boolean(80),// tem 80% de chance de ser verdadeiro
            ]);
        }
    }
}
