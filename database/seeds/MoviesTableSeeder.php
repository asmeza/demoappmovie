<?php

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\MovieType;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Movie::class,20)->create();
    }
}
