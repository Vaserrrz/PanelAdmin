<?php

namespace Database\Factories;

use App\Models\Proveedor;
use App\Models\Revendedor;
use App\Models\Satelite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Satelite>
 */
class SateliteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Satelite::class;

    public function definition()
    {
        // los campos son id,SAT_NOMBRE,SAT_DESCRIPCION,SAT_AZNUT,SAT_ELEVACION,SAT_LNB,SAT_FRECUENCIA,SAT_BANDAS,created_at,updated_at,PROVEEDOR_ID,RESELLER_ID

        return [
            'SAT_NOMBRE' => $this->faker->name,
            'SAT_DESCRIPCION' => $this->faker->sentence(5),
            'SAT_AZNUT' => $this->faker->randomNumber(2),
            'SAT_ELEVACION' => $this->faker->randomNumber(2),
            'SAT_LNB' => $this->faker->randomNumber(2),
            'SAT_FRECUENCIA' => $this->faker->randomNumber(2),
            'SAT_BANDAS' => $this->faker->randomNumber(2),
            'PROVEEDOR_ID' => Proveedor::inRandomOrder()->first()->id,
            // 'RESELLER_ID' => Revendedor::inRandomOrder()->first()->id,
        ];
    }
}
