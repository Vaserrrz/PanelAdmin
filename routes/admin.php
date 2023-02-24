<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

route::get('', [HomeController::class,'index']);
