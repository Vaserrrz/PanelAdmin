<?php

namespace App\Livewire;

use App\Models\Cliente;
use App\Models\Encargado;
use App\Models\Proveedor;
use App\Models\Remota;
use App\Models\Revendedor;
use App\Models\Socio;
use Livewire\Component;

/**
 * Summary of RemotaCreate
 */
class RemotaCreate extends Component
{
    /**
     * Summary of open
     * @var
     */
    public $open = false;
    /**
     * Summary of content
     * @var
     */
    public $title, $content;
    /**
     * Summary of render
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $remotas = Remota::all();
        $socios = Socio::all();
        $revendedores = Revendedor::all();
        $clientes = Cliente::has('encargados')->with('encargados')->get();
        $encargados = Encargado::all();
        $satelites = [];
        $planes = [];
        $proveedores = Proveedor::Has('satelites')->with('satelites')->get();



        return view('livewire.remota.remota-create', compact('remotas','planes','remotas','clientes','proveedores',
        'socios','revendedores','encargados','satelites'));
    }
}
