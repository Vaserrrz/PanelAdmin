<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use App\Models\Encargado;
use App\Models\Proveedor;
use App\Models\Remota;
use App\Models\Revendedor;
use App\Models\Socio;
use Livewire\Component;
use Livewire\WithPagination;

class RemotaIndex extends Component
{
    public $search;
    public $sort = "id";
    public $direction = "desc";

    public function render()
    {
        $remotas = Remota::where('REMOTA_EQUIPO','LIKE', '%'.$this->search.'%')
                         ->orwhere('REMOTA_SERIAL','LIKE', '%'.$this->search.'%')
                         ->orderBy($this->sort, $this->direction)
                         ->get();

        $socios = Socio::all();
        $revendedores = Revendedor::all();
        $clientes = Cliente::has('encargados')->with('encargados')->get();
        $encargados = Encargado::all();
        $satelites = [];
        $planes = [];
        $proveedores = Proveedor::Has('satelites')->with('satelites')->get();

        return view('livewire.remota-index', compact('remotas','planes','remotas','clientes','proveedores',
        'socios','revendedores','encargados','satelites'));
    }

    public function order($sort){

        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }



    }
}
