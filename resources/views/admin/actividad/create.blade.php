@extends('adminlte::page')

@section('title', 'INDEX')

@section('content_header')
    <h1> CREAR NUEVA ACTIVIDAD</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.actividad.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" class="form-control"
                        placeholder="Ingrese el nombre de la actividad" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">MEC:</label>
                    <input type="number" size=30 style="width:200px" name="MEC" id="MEC" min="1" class="form-control"
                        placeholder="Nro MEC" aria-describedby="helpId">
                </div>
                {{-- <div class="form-group">
                    <label for="">Tipo</label>
                    <br>
                    <input type="radio" name="Radio" id="Radio1" value="F"> Fisica<br>
                    <input type="radio" name="Radio" id="Radio2" value="R"> Recomendación<br>
                </div> --}}
                <div class="form-group">
                    <a href="{{ route('admin.actividad.index') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
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
