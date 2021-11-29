@extends('adminlte::page')

@section('title', 'INDEX')

@section('content_header')
    <h1>LISTADO DE ALIMENTOS</h1>
@stop

@section('content')
    <div>
        <button class="font-semibold btn-primary border-collapse">
            Crear Alimento
        </button>
        <button class="font-semibold btn-primary border-collapse">
            Crear Receta
        </button>
    </div>
    <form action="">
        <table id="fisica" class="table table-striped table-bordered shadow-lg mt-3" style="width:100%">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Grasa (g)</th>
                    <th scope="col">Energía (kcal)</th>
                    <th scope="col">Carbono (g)</th>
                    <th scope="col">Proteína (g)</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <TBODY>
                <tr>
                    <td>Queso Zamorano</td>
                    <td>14</td>
                    <td>226</td>
                    <td>0</td>
                    <td>26</td>

                    <td>
                        <!--platos/{plato}/edit-->
                        <!---->
                        <form action="" method="POST">
                            <a href="" class="btn btn-primary">Editar</a>
                            @csrf
                            <!--metodo para añadir token a un formulario-->
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>Pollo asado</td>
                    <td>42</td>
                    <td>482</td>
                    <td></td>
                    <td>27</td>

                    <td>
                        <!--platos/{plato}/edit-->
                        <!---->
                        <form action="" method="POST">
                            <a href="" class="btn btn-primary">Editar</a>
                            @csrf
                            <!--metodo para añadir token a un formulario-->
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            </TBODY>
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
