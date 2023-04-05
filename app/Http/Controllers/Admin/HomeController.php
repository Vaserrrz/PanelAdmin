<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Remota;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       /* dd( Remota::with('plan')->find(1));*/
        return view('admin.index');
    }
}
