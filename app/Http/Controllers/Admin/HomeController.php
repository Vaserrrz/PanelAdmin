<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cuenta;
use Illuminate\Http\Request;
use App\Models\Remota;

class HomeController extends Controller
{
    public function index(){
        $cuenta = Cuenta::count();
        $remota = Remota::count();
        return view('admin.index', compact('cuenta','remota'));
    }
}
