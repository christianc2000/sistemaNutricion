<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ActividadController;
use App\Http\Controllers\Admin\AlimentoController;

Route::get('',[HomeController::class, 'index']);
Route::resource('/actividad', ActividadController::class)->names('admin.actividad');
Route::resource('/alimento', AlimentoController::class)->names('admin.alimento');
Route::resource('/receta', AlimentoController::class)->names('admin.receta');
