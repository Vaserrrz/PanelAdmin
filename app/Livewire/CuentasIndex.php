<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cuenta;

class CuentasIndex extends Component
{
    public $search;
    public $sort = "id";
    public $direction = "desc";

    public function render()
    {
        $cuentas = Cuenta::where('correo','like','%'.$this->search.'%')
        ->orWhere('id','like','%'.$this->search.'%')
        ->orWhere('direccion','like','%'.$this->search.'%')->get();
        return view('livewire.cuentas-index',compact('cuentas'));
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
