@extends('adminlte::page')

@section('title', 'INDEX')

@section('content_header')
    <h1>LISTADO DE ACTIVIDAD</h1>
@stop

@section('content')
    <div class="card-blue">
        <strong class="font-semibold w-full">
            ACTIVIDADES FÍSICAS
        </strong>
    </Div>

    <div>
        <button class="font-semibold btn-primary border-collapse">
            Crear Ejercicio
        </button>
    </div>
    <form action="">
        <table id="fisica" class="table table-striped table-bordered shadow-lg mt-3" style="width:100%">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tiempo(min)</th>
                    <th scope="col">Calorias(cal)</th>
                    <th scope="col">Cumplida</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <TBODY>

                @foreach ($fisica as $fis)
                    <tr>

                        @if ($fis->tipo == 'F')
                            <td>{{ $fis->id }}</td>
                            <td>{{ $fis->nombre }}</td>
                            <td>{{ $fis->valor_tiempo }}</td>
                            <td>{{ $fis->valor_calorias }}</td>
                            <td>Sí</td>
                        @endif
                        <td>
                            <!--platos/{plato}/edit-->
                            <!---->
                            <form action="" method="POST">
                                <a href="{{route('admin.actividad.edit',$fis)}}" class="btn btn-primary">Editar</a>
                                @csrf
                                <!--metodo para añadir token a un formulario-->
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </TBODY>
        </table>
        <div class="card-blue">
            <strong class="font-semibold w-full">
                RECOMENDACIONES
            </strong>
            <div>
                <button class="font-semibold btn-primary border-collapse">
                    Crear Recomendación
                </button>
            </div>
        </Div>
        <table id="recomendaciones" class="table table-striped table-bordered shadow-lg mt-3" style="width:100%">
            <thead>
                <tr>
                    <th>
                        Recomendación
                    </th>
                    <th>
                        Fecha
                    </th>
                    <th>
                        Cumplida
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tomar 2,5 litros de Agua</td>
                    <td>20-11-2021</td>
                    <td>Sí</td>
                </tr>
            </tbody>
        </table>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script>
            console.log('Hi!');
        </script>
    @stop
