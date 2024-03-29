<?php

namespace App\Livewire;

use App\Models\Cliente;
use App\Models\Encargado;
use App\Models\Proveedor;
use App\Models\Remota;
use App\Models\Persona;
use App\Models\Socio;
use Livewire\Component;
use Livewire\WithPagination;

class RemotaIndex extends Component
{
    public $search;
    public $sort = "id";
    public $direction = "desc";
    /**
     * Summary of render
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {

        $remotas = Remota::where('REMOTA_EQUIPO','like','%'.$this->search.'%')->get();

        $socios = Persona::where('tipo','Socio')->get();
        $revendedores = Persona::all();
        $clientes = Cliente::has('encargados')->with('encargados')->get();
        $encargados = Encargado::all();
        $satelites = [];
        $planes = [];
        $proveedores = Proveedor::Has('satelites')->with('satelites')->get();

        return view('livewire.remota.remota-index', compact('remotas','planes','remotas','clientes','proveedores',
        'socios','revendedores','encargados','satelites'));
    }

    public $todos = [];

    public $todo = '';
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