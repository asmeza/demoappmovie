<?php

use Illuminate\Database\Seeder;
use App\Models\MovieType;

class MovieTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MovieType::class)->create([
            'name' => 'Accion'
        ]);

        factory(MovieType::class)->create([
            'name' => 'Comedia'
        ]);

        factory(MovieType::class)->create([
            'name' => 'Terror'
        ]);

        factory(MovieType::class)->create([
            'name' => 'Suspenso'
        ]);

        factory(MovieType::class)->create([
            'name' => 'Documental'
        ]);
    }
}
