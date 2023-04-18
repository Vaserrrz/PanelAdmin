<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Proveedor::class;

    public function definition()
    {
        return [
            'CI_RIF'            => $this->faker->randomNumber(9),
            'RAZON'             => $this->faker->name,
            'DIRECCION'         => $this->faker->address,
            'CONTACTO'          => $this->faker->phoneNumber,
            'METODO_PAGO'       => $this->faker->randomElement(['Efectivo', 'Transferencia', 'Cheque']),
            'DETALLE_PAGO'      => $this->faker->randomElement(['Efectivo', 'Transferencia', 'Cheque']),
            'PROVEEDOR_CORREO'  => $this->faker->email,
            'created_at'        => $this->faker->dateTimeBetween('-1 years', 'now'),
            'updated_at'        => $this->faker->dateTimeBetween('-1 years', 'now')
        ];
    }
}
