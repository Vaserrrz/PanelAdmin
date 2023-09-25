<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cuenta;

class CuentasCreate extends Component
{
    public function render()
    {

        $cuentas = Cuenta::all();

        return view('livewire.cuentas-create', compact('cuentas'));
    }
}
