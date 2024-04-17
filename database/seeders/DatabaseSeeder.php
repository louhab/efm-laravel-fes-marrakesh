<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ActiviteSeeder;
use Database\Seeders\ClubSeeder;
use Database\Seeders\EleveSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        ActiviteSeeder::class,
        ClubSeeder::class,
        EleveSeeder::class,
        ]);

    }
}
