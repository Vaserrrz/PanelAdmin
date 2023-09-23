<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuenta>
 */
class CuentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'correo' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password(),
            'cedula' => $this->faker->unique()->randomNumber(),
            'direccion' => $this->faker->address(),
        ];
    }
}
