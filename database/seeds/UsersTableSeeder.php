<?php

use Illuminate\Database\Seeder;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Jaider Quintero',
            'email' => ('jq@gmail.com'),
            'gender'=>('m')
        ]);

        factory(User::class,99)->create();

        
    }
}
