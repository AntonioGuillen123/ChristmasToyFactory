<?php

namespace Database\Seeders;

use App\Models\Toy;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        Toy::factory()->create([
                'name' => "juewaedawdaw",
                'description' => "dawdawawtg",
                'image' => "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.xataka.com%2Fmoviles%2Fmitico-telefono-juguete-fisher-price-esta-vuelta-esta-vez-como-telefono-ruedas-que-hace-llamadas&psig=AOvVaw2mpJJA87-l5CrDkE6abB5-&ust=1734188296319000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCMiA0vyApYoDFQAAAAAdAAAAABAE",
        ]);
    }

}