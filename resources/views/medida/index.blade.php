@extends('adminlte::page')

@section('title', 'PACIENTE')

@section('content_header')
    <h1>Medida</h1>
@stop

@section('content')
<a href=" {{route('medida.create')}} " class="btn btn-primary mb-4" >CREAR</a>

<table id="pacientes" class="table table-striped table-bordered shadow-lg mt-3" style="width:100%">
    <thead class="bg-dark text-white">
        
       <tr>
          <th scope="col">NOMBRE</th>
          <th scope="col">UNIDAD DE MEDIDA</th>
          <th scope="col">TIPO DE MEDIDA</th>
          <th scope="col">ACCIONES</th>
 
       </tr>
    </thead>
    <TBODY>
        @foreach ($medidas as $medida)
                <tr>

                <td>{{$medida->nombre}}</td>
                <td>{{$unidadMedidas->where('id',$medida->u_medida)->first()->nombre}}</td>
                <td>{{$tipoMedidas->where('id',$medida->tipo_medida_id)->first()->nombre}}</td>

                <td>
     
         
                    <form action="{{route('medida.destroy',compact('medida'))}}" method="POST">
                        <a href="{{route('medida.edit',compact('medida'))}}" class="btn btn-primary">Editar</a>                        
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