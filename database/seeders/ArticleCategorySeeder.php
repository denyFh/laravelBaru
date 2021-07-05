<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleCategory::create(['article_category_name' => 'Social Analytics']);
        ArticleCategory::create(['article_category_name' => 'Security']);
        ArticleCategory::create(['article_category_name' => 'Engagement']);
        ArticleCategory::create(['article_category_name' => 'Listening']);
        ArticleCategory::create(['article_category_name' => 'Collaboration']);
        ArticleCategory::create(['article_category_name' => 'Web & Mob Applications']);
    }
}
