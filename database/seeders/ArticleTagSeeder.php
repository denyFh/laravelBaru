<?php

namespace Database\Seeders;

use App\Models\ArticleTag;
use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleTag::create(['article_id' => '1','tag_id' => '3']);
        ArticleTag::create(['article_id' => '1','tag_id' => '1']);
        ArticleTag::create(['article_id' => '2','tag_id' => '2']);
        ArticleTag::create(['article_id' => '2','tag_id' => '1']);
        ArticleTag::create(['article_id' => '3','tag_id' => '2']);
        ArticleTag::create(['article_id' => '3','tag_id' => '3']);
    }
}
