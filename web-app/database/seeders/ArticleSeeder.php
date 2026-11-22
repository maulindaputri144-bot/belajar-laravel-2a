<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('articles')->insert([
                'author' => fake()->name(),
                'title' => fake()->sentence(4),
                'article' => fake()->paragraphs(3, true),
                'publish_at' => fake()->date(),
            ]);
        }
    }
}
