<?php

use App\Article;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 20; $i++) {
            Article::create([
                'title' => $faker->sentence(2),
                'intro' => $faker->text, 
                'content' => $faker->text, 
                'author' => $faker->name, 
            ]);
        }
    }
}
