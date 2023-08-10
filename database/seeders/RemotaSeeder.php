<?php

namespace Database\Seeders;

use App\Models\Remota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RemotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Remota::create([
            'REMOTA_NODO' => 'Remota 1',
            'REMOTA_EQUIPO' => 'Equipo 1',
            'REMOTA_SERIAL' => 'Serial 1',
            'CLIENTE_ID' => 1,
            'ENCARGADO_ID' => 3,
            'SOCIO_ID' => 1,
            'PROVEEDOR_ID' => 3,
            'SATELITE_ID' => 1,
            'PLAN_ID' => 12,
            'REMOTA_COORDENADA' => '12123456',
            'REMOTA_BUC' => 'BUC 1',
            'REMOTA_BUC_SERIAL' => 'BUC SERIAL 1',
            'REMOTA_LNB' => 'LNB 1',
            'REMOTA_LNB_SERIAL' => 'LNB SERIAL 1',
            'REMOTA_PLANDOWN' => 56,
            'REMOTA_PLANUP' => 61,
            'REMOTA_COSTO_PLAN' => 2,
            'REMOTA_RENTA' => 22,
            'REMOTA_DIA_CORTE' => '2021-04-05',
            'REMOTA_DIA_ACTIVACION' => '2021-12-05',
            'REMOTA_DETALLE' => 'Detalle 1',
            'REMOTA_PLATO' => 'Plato 1',
            'REMOTA_IP_MODEM' => 'ip modem 1',
            'REMOTA_IP_GESTION' => 'IP Gestion 1',
            'REMOTA_STATUS' => 1,
            'REMOTA_BONDA' => 'Bonda 1',
            'RESELLER_ID' => 1,

        ]);
    }
}
