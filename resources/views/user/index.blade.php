@extends('adminlte::page')

@section('title', 'USUARIOS')

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
<a href="{{route('users.create')}}" class="btn btn-primary mb-4" >CREAR</a>

<table id="users" class="table table-striped table-bordered shadow-lg mt-3" style="width:100%">
    <thead class="bg-dark text-white">
       <tr>
          <th scope="col">NOMBRE DE USUARIO</th>
          <th scope="col">EMAIL</th>
          <th scope="col">ACCIONES</th>
       </tr>
    </thead>
    <TBODY>
        @foreach ($users as $user)
          <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>


                <!--platos/{plato}/edit-->
                <!---->
                <form action="{{route('users.destroy',$user)}}" method="POST">
                    {{-- <a href="{{route('users.edit', $user)}}" class="btn btn-primary">Asignar rol</a> --}}
                    <a href="{{route('users.edit', $user)}}" class="btn btn-primary">Editar</a>
                    @csrf  <!--metodo para añadir token a un formulario-->
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    {{-- <a href="{{route('users.show', $user)}}" class="btn btn-primary">Mostrar</a> --}}
                </form>
              </td>
          </tr>
        @endforeach
    </TBODY>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function() {
     $('#users').DataTable({
         "lengthMenu":[[5,10,50,-1],[5,10,50,"Todo"]]
     });
 } );
</script>
@stop
