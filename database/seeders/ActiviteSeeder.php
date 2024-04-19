<?php

namespace Database\Seeders;
use App\Models\Activite ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i < 5; $i++) {
            Activite::create([
                'description' => $faker->text,
                'date' => now(),
                'Nombre_jours' => rand(1, 100),
                "club_id"=>rand(1, 10)
            ]);
        }
    }
}
