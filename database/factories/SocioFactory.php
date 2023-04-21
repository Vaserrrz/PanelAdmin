<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Socio>
 */
class SocioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // campos SOCIO_NOMBRE	CI_SOCIO	TELF_SOCIO	SOCIO_CORREO	created_at
        return [
            'SOCIO_NOMBRE' => $this->faker->name,
            'CI_SOCIO' => $this->faker->randomNumber(9),
            'TELF_SOCIO' => $this->faker->phoneNumber(),
            'SOCIO_CORREO' => $this->faker->email(),

        ];
    }
}
