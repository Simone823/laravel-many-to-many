<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array categories
        $categories = [
            'Sport',
            'Musica',
            'Giochi',
            'Notizie',
            'Motociclismo',
            'Elettronica'
        ];

        // Foreach array categories
        foreach($categories as $element) {

            // Creo una nuova categoria
            $category = new Category();

            // Imposto le proprietà della nuova categoria
            $category->name = $element;
            $category->slug = Str::slug($element, '-');

            // Salvo i dati
            $category->save();
        }
    }
}
