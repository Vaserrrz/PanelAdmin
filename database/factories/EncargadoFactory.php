<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Encargado>
 */
class EncargadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // campos CLIENTE_ID	ENCARGADO_NOMBRE	ENCARGADO_TELF	ENCARGADO_CORREO	ENVIO_TELEGRAM
        return [
            'CLIENTE_ID' => Cliente::inRandomOrder()->first()->id,
            'ENCARGADO_NOMBRE' => $this->faker->name,
            'ENCARGADO_TELF' => $this->faker->phoneNumber(),
            'ENCARGADO_CORREO' => $this->faker->email(),
            'ENVIO_TELEGRAM' => $this->faker->randomNumber(2),
        ];
    }
}
