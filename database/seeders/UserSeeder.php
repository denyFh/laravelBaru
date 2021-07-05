<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['username' => 'chintaalya_',
            'password' => '123']);
        User::create(['username' => 'denf.y',
        'password' => '456']);
    }
}
