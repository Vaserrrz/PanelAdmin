<?php

namespace Database\Factories;

use App\Models\Proveedor;
use App\Models\Revendedor;
use App\Models\Satelite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // campos id ,PLAN_NOMBRE,PLAN_SUBIDA,PLAN_BAJADA,PLAN_CONTENCION,PLAN_COSTO,PLAN_PRECIO,created_at,updated_at,RESELLER_ID ,PROVEEDOR_ID
        return [
            'PLAN_NOMBRE' => $this->faker->randomElement(['Arrecho','4MB','8MB','16MB']),
            'PLAN_SUBIDA' => $this->faker->randomNumber(2),
            'PLAN_BAJADA' => $this->faker->randomNumber(2),
            'PLAN_CONTENCION' => $this->faker->randomNumber(2),
            'PLAN_COSTO' => $this->faker->randomNumber(2),
            'PLAN_PRECIO' => $this->faker->randomNumber(2),
            'SATELITE_ID' => Satelite::inRandomOrder()->first()->id,
            // 'RESELLER_ID' => Revendedor::inRandomOrder()->first()->id,

        ];
    }
}
