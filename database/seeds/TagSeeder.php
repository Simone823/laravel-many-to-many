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

        // Array colori
        $array_color = [
            '#FEFF94',
            '#AD64C5',
            '#88D8EC',
            '#BCFFF2',
            '#FFADED',
            '#44FADD',
            '#FFEE7D',
            '#F67FF5',
            '#41B3FF',
            '#FDEA2E',
            '#74F9FF',
            '#B5FF7D',
            '#F3F798',
            '#7CDFFF'
        ];

        foreach ($tags as $element) {

            // Creo un nuovo tag
            $tag = new Tag();

            // Imposto le proprietà
            $tag->name = $element;
            $tag->slug = Str::slug($element, '-');
            $tag->color = $faker->randomElement($array_color);

            // Salvo i dati
            $tag->save();
        }
    }
}
