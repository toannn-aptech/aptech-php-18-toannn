<?php

use App\Post;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            Post::create([
                'title' => $faker->sentence($nbWords = rand(5, 9), $variableNbWords = true),
                'slug' => $faker->slug,
                'description' => $faker->paragraph($nbSentences = rand(1, 3), $variableNbSentences = true),
                'content' => $faker->randomHtml(2, 5),
            ]);
        }
    }
}
