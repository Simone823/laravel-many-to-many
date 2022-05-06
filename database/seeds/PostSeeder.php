<?php

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        // Recupero l'elenco di categorie
        $categories = Category::all();

        // Category id pluck
        $categoryId = $categories->pluck('id')->all();

        // Recupero i tag dal db
        $tags = Tag::all();

        // Tag id pluck
        $tagsId = $tags->pluck('id')->all();

        for ($i = 0; $i < 100; $i++) { 

            // Creo un nuovo post
            $posts = new Post();

            // Imposto le proprietà con il faker
            $posts->title = $faker->sentence();
            $posts->slug = Str::slug($posts->title, '-');
            $posts->description = $faker->paragraphs(2, true);
            $posts->category_id = $faker->randomElement($categoryId);

            // Tags random
            $tags_random = $faker->randomElements($tagsId, 3);

            // User random
            $user = User::inRandomOrder()->first();
            $posts->user_id = $user->id;

            $posts->image = $faker->imageUrl('500', '500', true);
            $posts->publication_date = $faker->randomElement([null, $faker->date()]);
            $posts->save();

            // Assegno i tags random con metodo attach
            $posts->tags()->attach($tags_random);
        }
    }
}
