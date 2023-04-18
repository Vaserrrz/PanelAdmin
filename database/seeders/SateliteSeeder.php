<?php

namespace Database\Seeders;

use App\Models\Satelite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SateliteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Satelite::factory(15)->create();
    }
}
