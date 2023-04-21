<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Alfonzo',
            'email' => 'alfonzo@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::factory()->create([
            'name' => 'victor',
            'email' => 'vasrcg12@gmail.com',
            'password' => bcrypt('password')
        ]);

    }
}
