@extends('adminlte::page')

@section('title', 'INDEX')

@section('content_header')
    <h1> CREAR ALIMENTO</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.alimento.store') }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" class="form-control"
                        placeholder="Ingrese el nombre del alimento" aria-describedby="helpId"
                        value="{{ old('nombre') }}">
                    @error('nombre')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Nombre Común: </label>
                    <input type="text" name="nombreComun" id="nombreComun" class="form-control"
                        placeholder="Ingrese el nombre Comun del alimento" aria-describedby="helpId"
                        value="{{ old('nombreComun') }}">
                    @error('nombreComun')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Peso Único: </label>
                    <input type="number" size=30 style="width:200px" name="pesoUnico" id="pesoUnico" min="1"
                        class="form-control" placeholder="Ingrese Peso del alimento" aria-describedby="helpId"
                        value="{{ old('pesoUnico') }}">
                    @error('pesoUnico')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <h3 class="font-semibold">
                    MACRONUTRIENTES
                </h3>
                <div class="row">
                    <div class="form-group grid-cols-1 px-1">
                        <label for="">Energía</label>
                        <input type="number" size=30 style="width:200px" name="Energía" id="Energía" min="1"
                            class="form-control" placeholder="Cantidad de energía" aria-describedby="helpId"
                            value="{{ old('Energía') }}">
                    </div>
                    <div class="form-group grid-cols-2 px-1">
                        <label for="" class="font-semibold">Grasa</label>
                        <input type="number" size=30 style="width:200px" name="Grasa" id="Grasa" min="1"
                            class="form-control" placeholder="Cantidad de grasa" aria-describedby="helpId"
                            value="{{ old('Grasa') }}">
                    </div>
                    <div class="form-group grid-cols-2 px-1">
                        <label for="">H. Carbono</label>
                        <input type="number" size=30 style="width:200px" name="H. Carbono" id="H. Carbono" min="1"
                            class="form-control" placeholder="Cantidad H. Carbono" aria-describedby="helpId"
                            value="{{ old('H. Carbono') }}">
                    </div>
                    <div class="form-group grid-cols-2 px-1">
                        <label for="">Proteína</label>
                        <input type="number" size=30 style="width:200px" name="Proteína" id="Proteína" min="1"
                            class="form-control" placeholder="Cantidad Proteína" aria-describedby="helpId"
                            value="{{ old('Proteína') }}">
                    </div>
                </div>
                <h3 class="font-semibold">
                    MICRONUTRIENTES
                </h3>
                <div class="row">

                    <div class="form-group grid-cols-1 px-1">
                        <label for="">Colesterol</label>
                        <input type="number" size=30 style="width:200px" name="Colesterol" id="Colesterol" min="1"
                            class="form-control" placeholder="Cantidad de Colesterol" aria-describedby="helpId"
                            value="{{ old('Colesterol') }}">
                    </div>
                    <div class="form-group grid-cols-2 px-1">
                        <label for="" class="font-semibold">Fibra Alimentaria</label>
                        <input type="number" size=30 style="width:200px" name="Fibra Alimentaria" id="Fibra Alimentaria" min="1"
                            class="form-control" placeholder="Cantidad Fibra Alimentaria" aria-describedby="helpId"
                            value="{{ old('Fibra Alimentaria') }}">
                    </div>
                    <div class="form-group grid-cols-2 px-1">
                        <label for="">Sodio</label>
                        <input type="number" size=30 style="width:200px" name="Sodio" id="Sodio" min="1"
                            class="form-control" placeholder="Cantidad Sodio" aria-describedby="helpId"
                            value="{{ old('Sodio') }}">
                    </div>
                    <div class="form-group grid-cols-2 px-1">
                        <label for="">Vítamina A</label>
                        <input type="number" size=30 style="width:200px" name="Vítamina A" id="Vítamina A" min="1"
                            class="form-control" placeholder="Cantidad Vítamina A" aria-describedby="helpId"
                            value="{{ old('Vítamina A') }}">
                    </div>
                </div>

                <div class="form-group">
                    <a href="{{ route('admin.actividad.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>


@stop
