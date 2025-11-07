<?php

use App\Http\Controllers\DepartamentosController;
use App\Models\Departamentos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::resource('/departamentos', DepartamentosController::class);