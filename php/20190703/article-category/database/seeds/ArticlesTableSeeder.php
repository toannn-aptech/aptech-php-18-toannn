<?php
use App\Article;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

// use Illuminate\Support\Facades\DB;
class ArticlesTableSeeder extends Seeder
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
            Article::create([
                'title' => $faker->sentence($nbWords = rand(5, 9), $variableNbWords = true),
                'title_slug' => $faker->slug,
                'description' => $faker->paragraph($nbSentences = rand(1, 3), $variableNbSentences = true),
                'content' => $faker->randomHtml(2, 5),
            ]);
        }
    }
}
