<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // los campos son CI_RIF,CLIENTE_RAZON,CLIENTE_DIRECCION,CLIENTE_DETALLE,CLIENTE_TELF,CLIENTE_TELF2,CLIENTE_WHATSAPP,CLIENTE_TELEGRAM,CLIENTE_CORREO,STATUS,ENVIO_TELEGRAM,ENVIO_WHATSAPP
        return [
            'CI_RIF' => $this->faker->randomNumber(9),
            'CLIENTE_RAZON' => $this->faker->name,
            'CLIENTE_DIRECCION' => $this->faker->address(),
            'CLIENTE_DETALLE' => $this->faker->sentence(),
            'CLIENTE_TELF' => $this->faker->phoneNumber(),
            'CLIENTE_TELF2' => $this->faker->phoneNumber(),
            'CLIENTE_WHATSAPP' => $this->faker->phoneNumber(),
            'CLIENTE_TELEGRAM' => $this->faker->phoneNumber(),
            'CLIENTE_CORREO' => $this->faker->email(),
            'STATUS' => $this->faker->randomNumber(2),
            'ENVIO_TELEGRAM' => $this->faker->randomNumber(2),
            'ENVIO_WHATSAPP' => $this->faker->randomnumber(2),
        ];
    }
}
