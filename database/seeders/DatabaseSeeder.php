<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Revendedor;
use App\Models\Satelite;
use Illuminate\Database\Seeder;
use Database\Factories\RevendedorFactory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Usuarios / users
        $this->call(UserSeeder::class);
        // Proveedores / proveedors
        $this->call(ProveedorSeeder::class);
        // Revendedores / revendedors
        $this->call(RevendedorSeeder::class);
        // Satelites / satelites
        $this->call(SateliteSeeder::class);
        // Planes / plans
        $this->call(PlanSeeder::class);
    }
}
