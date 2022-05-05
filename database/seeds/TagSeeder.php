<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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

            // Salvo i dati
            $tag->save();
        }
    }
}
