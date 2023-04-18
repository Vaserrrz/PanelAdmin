<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proveedor::factory(15)->create();
        Proveedor::factory()->create([
            'CI_RIF' => '123456789',
            'RAZON' => 'Alfonzomix',
            'DIRECCION' => 'Casa de alfonzo ',
            'CONTACTO' => '123456789',
            'METODO_PAGO' => 'Efectivo',
            'DETALLE_PAGO' => 'Efectivo',
            'PROVEEDOR_CORREO'=> 'alfonzo@gmail.com'
        ]);
    }
}
