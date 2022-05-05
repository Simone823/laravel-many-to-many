<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Array tags
        $tags = [
            'Hip-Hop',
            'Rap',
            'Dance',
            'Simulazione',
            'Sportivo',
            'Casual game',
            'Endurance',
            'Dakar',
            'Motomondiale',
            'Tablet',
            'Droni',
            'Smartphone',
            'Storia',
            'Cultura',
            'Tradizioni'
        ];

        foreach ($tags as $element) {

            // Creo un nuovo tag
            $tag = new Tag();

            // Imposto le proprietà
            $tag->name = $element;
            $tag->slug = Str::slug($element, '-');
            $tag->color = $faker->hexColor();

            // Salvo i dati
            $tag->save();
        }
    }
}
