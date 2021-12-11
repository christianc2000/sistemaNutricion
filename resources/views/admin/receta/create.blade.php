@extends('adminlte::page')

@section('title', 'INDEX')

@section('content_header')
    <h1> CREAR RECETA</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.receta.store') }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="">Nombre </label>
                    <input type="text" name="nombre" id="nombre" class="form-control"
                        placeholder="Ingrese el nombre del alimento" aria-describedby="helpId"
                        value="{{ old('nombre') }}">
                    @error('nombre')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Preparación </label>
                    <input type="text" name="preparacion" id="preparacion" class="form-control"
                        placeholder="Preparación de la comida" aria-describedby="helpId" value="{{ old('nombreComun') }}">
                    @error('preparacion')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group grid-cols-1">
                    <label for="">Peso(g) </label>
                    <input type="number" size=30 style="width:200px" name="peso" id="peso" min="0" class="form-control"
                        placeholder="Ingrese Peso del alimento" aria-describedby="helpId" value="{{ old('peso') }}">
                    @error('peso')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <a href="{{ route('admin.alimento.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                <div>
                    <strong class="font-semibold ">INGREDIENTES</strong>
                    <br>
                    {{--<a href="javascript:location.reload()" class="btn btn-danger">Añadir Alimento</a>--}}
                    <button onclick="mostrar()" class="bg-red-600">Mostrar</button>

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
<script type="text/javascript">
     function mostrar(){
         let nombre= document.getElementById("nombre").value;
         console.log(nombre);
     }
</script>

@stop
