<?php

namespace App\Http\Controllers;

use App\Models\cuenta;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    public function index()
    {
        $cuentas = cuenta::all();
        return view('Cuenta', compact('cuentas'));

    }
}
