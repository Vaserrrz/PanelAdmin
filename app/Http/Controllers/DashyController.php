<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashyController extends Controller
{
    public function index()
    {
        return view('dashydash');
    }
}
