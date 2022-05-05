<?php

use App\Post;
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

        for ($i = 0; $i < 100; $i++) { 

            // Creo un nuovo post
            $posts = new Post();

            // Imposto le proprietà con il faker
            $posts->title = $faker->sentence();
            $posts->slug = Str::slug($posts->title, '-');
            $posts->description = $faker->paragraphs(2, true);
            $posts->image = $faker->imageUrl('500', '500', true);
            $posts->publication_date = $faker->randomElement([null, $faker->date()]);
            $posts->save();
        }
    }
}
