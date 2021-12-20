@extends('adminlte::page')

@section('title', 'PACIENTE')

@section('content_header')
    <h1>Pacientes</h1>
@stop

@section('content')
<a href=" {{route('paciente.create')}} " class="btn btn-primary mb-4" >CREAR</a>

<table id="pacientes" class="table table-striped table-bordered shadow-lg mt-3" style="width:100%">
    <thead class="bg-dark text-white">

       <tr>
        <th scope="col">CI</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">APELLIDOS</th>
          <th scope="col">CELULAR</th>
          <th scope="col">ACCIONES</th>

       </tr>
    </thead>
    <TBODY>
        @foreach ($pacientes as $paciente)
                <tr>

                <td>{{$personas->where('id',$paciente->id)->first()->ci}}</td>
                <td>{{$personas->where('id',$paciente->id)->first()->nombres}}</td>
                <td>{{$personas->where('id',$paciente->id)->first()->apellidos}}</td>
                <td>{{$personas->where('id',$paciente->id)->first()->celular}}</td>

                <td>


                    <form action="{{route('paciente.destroy',compact('paciente'))}}" method="POST">
                        <a href="{{route('paciente.edit',compact('paciente'))}}" class="btn btn-primary">Editar</a>
                        <a href="{{route('admin.planAlimenticio.edit',compact('paciente'))}}"></a>
                        @csrf  <!--metodo para añadir token a un formulario-->
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
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
     $('#productosPlatos').DataTable({
         "lengthMenu":[[5,10,50,-1],[5,10,50,"Todo"]]
     });
 } );
</script>
@stop
