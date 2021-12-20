@extends('adminlte::page')

@section('title', 'INDEX')

@section('content_header')
    <h1> CREAR RECETA</h1>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <form id="frmReceta" action="{{ route('admin.receta.store') }}" method="POST">

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

                <div class="form-group">
                    <label for="">Peso(g) </label>
                    <input type="number" size=50 style="width:200px" name="peso" id="peso" min="0" class="form-control"
                        placeholder="Ingrese Peso del alimento" aria-describedby="helpId" value="{{ old('peso') }}">
                    @error('peso')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                {{-- <a href="javascript:location.reload()" class="btn btn-danger">Añadir Alimento</a> --}}
                {{-- <a onclick="mostrar()" href="" class="btn btn-danger">Mostrar</a> --}}
                {{-- Para colocar en una fila varios input --}}
                <div class="container">
                    <div class="text-center">
                        <strong class="font-semibold ">INGREDIENTES</strong>
                    </div>
                    <div id="jsonDiv">

                    </div>
                    <div class="row justify-content-center py-4">
                        <div class="form-group col-md-3 ">
                            <label>Cantidad(gramos)</label>
                            <input name="cantidad" id="cantidad" type="number" class="form-control"
                                placeholder="cantidad">
                        </div>
                        <div class="form-group col-md-3 ">
                            <label>Alimentos</label>
                            <select name="alimento" id="alimento" class="form-control">
                                @foreach ($alimentos as $alimento)
                                    <option value="{{ $alimento->nombre }}">{{ $alimento->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input class="form-check-input" type="checkbox" value="" id="vector[]">
                        <div class="form-group col-md-3">
                            <button id="btnAdd" onclick="plus()" type="button" class="button is-success"
                                style="height:68px;width: 70px">
                                <i class="fas fa-plus"></i>
                            </button>
                            <button id="btnSave" onclick="save()" type="submit" class="btn btn-primary"
                                style="height:68px; width: 90px">Guardar</button>
                            <a href="{{ route('admin.alimento.index') }}" class="btn btn-danger">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
            {{-- ALT+SHIFT+TECLA DE ABAJO
                CTRL+D=Selecciona palabras repetidas --}}

            <div id="divElements">
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://kit.fontawesome.com/3dc732140d.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        const $divElements = document.getElementById("divElements");

        function mostrar() {
            let nombre = document.getElementById("nombre").value;
            console.log(nombre);
        }

        function removeElement(event) {
            event.target.parentElement.remove()
            delete parameters[position]
        }
        let parameters = []
        const addJsonElement = json => {
            parameters.push(json)
            return parameters.length - 1
        }

        function plus() {
            const $form = document.getElementById("frmReceta");
            // const $divElements = document.getElementById("divElements");
            const $btnSave = document.getElementById("btnSave");
            const $btnAdd = document.getElementById("btnAdd");


            const templateElement = (data, position) => {
                return (`
                    <button class="delete" onclick="removeElement(event,${position})"></button>
                    <strong> </strong> ${data}
                `)
            }
            if ($form.cantidad.value != "" && $form.alimento.value != "") {
                let index = addJsonElement({
                    cantidad: $form.cantidad.value,
                    alimento: $form.alimento.value
                })
                const $div = document.createElement("div")
                $div.classList.add("notification", "is-link", "is-light", "py-2", "my-1")
                $div.innerHTML = templateElement(`${$form.cantidad.value} gramos de ${$form.alimento.value}`)
                $divElements.insertBefore($div, $divElements.firstChild)

            } else {
                alert("Rellene todos los campos");
            }
        }

        function save() {
            parameters = parameters.filter(e1 => e1 != null)
            const $jsonDiv = document.getElementById("jsonDiv")
            const $divVector=document.getElementById("vector")
            $jsonDiv.innerHTML = `JSON: ${JSON.stringify(parameters)}`
            $divElements.innerHTML = ""
            parameters = []
        }
    </script>
@stop
