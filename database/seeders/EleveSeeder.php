<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Eleve ;



class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i < 20; $i++) {
            Eleve::create([
                'nom' => $faker->name,
                'prenom' => $faker->name,
                "club_id"=>rand(1, 10)
            ]);
        }

    }
}
