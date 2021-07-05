<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['tag_name' => 'Responsive']);
        Tag::create(['tag_name' => 'Fresh']);
        Tag::create(['tag_name' => 'Modern']);
        Tag::create(['tag_name' => 'Corporate']);
        Tag::create(['tag_name' => 'Business']);
    }
}
