<?php

namespace Database\Seeders;

use App\Models\Article;
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
        Article::create(
            ['title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc luctus nunc tortor, a sagittis mi gravida sit amet. Maecenas vel nibh a metus porta euismod. Curabitur sit amet mattis purus. Etiam vitae dui at velit congue tincidunt at nec lacus. Praesent non urna et neque volutpat fermentum eu sed lectus. Cras pulvinar volutpat lectus eu ullamcorper. Fusce mollis orci nec erat blandit, vel suscipit mauris dignissim. Integer convallis, mauris nec auctor luctus, nulla augue pulvinar velit, et tempus est erat ut massa. Vestibulum sodales odio et tempus luctus. Fusce rhoncus molestie nisl, non interdum dolor tincidunt quis. In hac habitasse platea dictumst. Fusce malesuada lorem augue, eget euismod mi imperdiet eget.',
            'user_id' => '1',
            'category_id' => '1']);
        Article::create(
            ['title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc luctus nunc tortor, a sagittis mi gravida sit amet. Maecenas vel nibh a metus porta euismod. Curabitur sit amet mattis purus. Etiam vitae dui at velit congue tincidunt at nec lacus. Praesent non urna et neque volutpat fermentum eu sed lectus. Cras pulvinar volutpat lectus eu ullamcorper. Fusce mollis orci nec erat blandit, vel suscipit mauris dignissim. Integer convallis, mauris nec auctor luctus, nulla augue pulvinar velit, et tempus est erat ut massa. Vestibulum sodales odio et tempus luctus. Fusce rhoncus molestie nisl, non interdum dolor tincidunt quis. In hac habitasse platea dictumst. Fusce malesuada lorem augue, eget euismod mi imperdiet eget.',
            'user_id' => '2',
            'category_id' => '2']);
        Article::create(
            ['title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc luctus nunc tortor, a sagittis mi gravida sit amet. Maecenas vel nibh a metus porta euismod. Curabitur sit amet mattis purus. Etiam vitae dui at velit congue tincidunt at nec lacus. Praesent non urna et neque volutpat fermentum eu sed lectus. Cras pulvinar volutpat lectus eu ullamcorper. Fusce mollis orci nec erat blandit, vel suscipit mauris dignissim. Integer convallis, mauris nec auctor luctus, nulla augue pulvinar velit, et tempus est erat ut massa. Vestibulum sodales odio et tempus luctus. Fusce rhoncus molestie nisl, non interdum dolor tincidunt quis. In hac habitasse platea dictumst. Fusce malesuada lorem augue, eget euismod mi imperdiet eget.',
            'user_id' => '1',
            'category_id' => '3']);
    }
}
