<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;



class VoitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $faker = \Faker\Factory::create();

         for($i=1 ; $i < 10 ; $i++){
           DB::table('voiture_tables')->insert([
            'brand' => $faker->name,
            'matricules' => $faker->name,
            'date_mise_en_circulation' => $faker->date() ,
            'created_at' => now(),
            'updated_at' => now()
        ]);
         }
    }
}
