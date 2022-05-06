<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Creo il mio utente
        User::create([
            'name' => 'Simone',
            'email' => 'simone.daglio823@outlook.it',
            'password' => Hash::make('ciao1234'),
        ]);


        // Ciclo utente fake
        for ($i=0; $i < 10; $i++) {

            // Creo un  nuovo utente
            User::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->email(),
                'password' => Hash::make($faker->password()),
            ]);
        }
    }
}
