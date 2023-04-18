<?php

namespace Database\Factories;

use App\Models\Revendedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Revendedor>
 */
class RevendedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Revendedor::class;
    public function definition()
    {
          // Los campos son id,NOMBRE_RESELLER,NOC_RESELLER,TELF_RESELLER,TELF2_RESELLER,created_at,updated_at

        return [
            'NOMBRE_RESELLER' => $this->faker->name,
            'NOC_RESELLER' => $this->faker->randomNumber(2),
            'TELF_RESELLER' => $this->faker->randomNumber(2),
            'TELF2_RESELLER' => $this->faker->randomNumber(2)
        ];
    }
}
