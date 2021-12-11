<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlimentoRequest;
use App\Models\Alimento;
use App\Models\AlimentoNutrientes;
use App\Models\Nutriente;
use App\Models\Receta;
use Database\Seeders\NutrienteSeeder;
use Illuminate\Http\Request;

class AlimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alimentos = Alimento::all();
        $recetas=Receta::All();
        return view('admin.alimento.index',compact('alimentos','recetas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.alimento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlimentoRequest $request)
    {

        return redirect()->route('admin.alimento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Alimento $alimento)
    {

        return view('admin.actividad.show', compact('alimento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alimento $alimento)
    {
        return view('admin.alimento.edit', compact('alimento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlimentoRequest $request, Alimento $alimento)
    {

        return redirect()->route('admin.actividad.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alimento $alimento)
    {
        Alimento::destroy($alimento->id);
        return redirect()->route('admin.alimento.index');
    }
}