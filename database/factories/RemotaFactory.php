<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Encargado;
use App\Models\Plan;
use App\Models\Proveedor;
use App\Models\Revendedor;
use App\Models\Satelite;
use App\Models\Socio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Remota>
 */
class RemotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
// lOS campos son REMOTA_NODO,CLIENTE_ID ,REMOTA_EQUIPO,REMOTA_SERIAL,REMOTA_COORDENADA,REMOTA_BUC,REMOTA_BUC_SERIAL,REMOTA_LNB,REMOTA_LNB_SERIAL,REMOTA_PLANDOWN,REMOTA_PLANUP,REMOTA_COSTO_PLAN,REMOTA_RENTA,REMOTA_DIA_CORTE,REMOTA_DIA_ACTIVACION,REMOTA_DETALLE,REMOTA_IP_MODEM,REMOTA_IP_GESTION,PLAN_ID ,PROVEEDOR_ID ,SOCIO_ID ,RESELLER_ID ,ENCARGADO_ID ,REMOTA_STATUS,REMOTA_BONDA,SATELITE_ID ,created_at,updated_at


        return [
            'REMOTA_NODO' => $this->faker->name,
            'REMOTA_EQUIPO' => $this->faker->name,
            'REMOTA_SERIAL' => $this->faker->uuid(),
            'REMOTA_COORDENADA' => $this->faker->name,
            'REMOTA_BUC' => $this->faker->name,
            'REMOTA_BUC_SERIAL' => $this->faker->uuid(),
            'REMOTA_LNB' => $this->faker->name,
            'REMOTA_LNB_SERIAL' => $this->faker->uuid(),
            'REMOTA_PLANDOWN' => $this->faker->randomNumber(1),
            'REMOTA_PLANUP' => $this->faker->randomNumber(1),
            'REMOTA_COSTO_PLAN' => $this->faker->randomNumber(4),
            'REMOTA_RENTA' => $this->faker->name,
            'REMOTA_DIA_CORTE' => $this->faker->date(),
            'REMOTA_DIA_ACTIVACION' => $this->faker->date(),
            'REMOTA_DETALLE' => $this->faker->paragraph(),
            'REMOTA_PLATO' => $this->faker->name,
            'REMOTA_IP_MODEM' => $this->faker->ipv4(),
            'REMOTA_IP_GESTION' => $this->faker->ipv4(),
            'REMOTA_STATUS' => $this->faker->randomNumber(1),
            'REMOTA_BONDA' => $this->faker->name,
            'CLIENTE_ID' =>  Cliente::inRandomOrder()->first()->id,
            'PLAN_ID' =>  Plan::inRandomOrder()->first()->id,
            'PROVEEDOR_ID' =>  Proveedor::inRandomOrder()->first()->id,
            'SOCIO_ID' => Socio::inRandomOrder()->first()->id,
            'RESELLER_ID' => Revendedor::inRandomOrder()->first()->id,
            'ENCARGADO_ID' => Encargado::inRandomOrder()->first()->id,
            'SATELITE_ID' => Satelite::inRandomOrder()->first()->id,

        ];
    }
}
