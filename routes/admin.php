<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ActividadController;
use App\Http\Controllers\Admin\AlimentoController;
use App\Http\Controllers\Admin\RecetaController;
use App\Http\Controllers\PlanAlimenticioController;

Route::get('',[HomeController::class, 'index']);
Route::resource('/actividad', ActividadController::class)->names('admin.actividad');
Route::resource('/alimento', AlimentoController::class)->names('admin.alimento');
Route::resource('/receta', RecetaController::class)->names('admin.receta');
Route::resource('/planAlimenticio',PlanAlimenticioController::class)->names('admin.planAlimenticio');
