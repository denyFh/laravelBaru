<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ArticleSeeder;
use Database\Seeders\ArticleTagSeeder;
use Database\Seeders\ArticleCategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ArticleCategorySeeder::class,
            TagSeeder::class,
            ArticleSeeder::class,
            ArticleTagSeeder::class
        ]);
    }
}
