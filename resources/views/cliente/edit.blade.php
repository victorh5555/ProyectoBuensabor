@extends('template.sb.index')
@section('titulo', 'Editar Clientes')
@section('contenido')

    <div class="card">
            <div class="card-header">
                <h4 class="text-center">FORMULARIO DE EDICION</h4>
            </div>
        <div class="card-body">
            <form action="{{ route('cliente.update', $cliente->id)}}" method="post">
            @method('PUT')
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">NOMBRE</label>
                            <input type="text" name="nombre" id="nombre" value="{{ $cliente->nombre }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">APELLIDOS</label>
                            <input type="text" name="apellido" id="apellido" value="{{ $cliente->apellido }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">CEDULA</label>
                            <input type="text" name="ci" id="ci" value="{{ $cliente->ci }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">DIRECCION</label>
                            <input type="text" name="direccion" id="direccion" value="{{ $cliente->direccion }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">CELULAR</label>
                            <input type="number" name="celular" id="celular" value="{{ $cliente->celular }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">FECHA DE NACIMIENTO</label>
                            <input type="date" name="fecha_nac" id="fecha_nac" value="{{ $cliente->fecha_nac }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">CORREO ELECTRONICO</label>
                            <input type="email" name="correo" id="correo" value="{{ $cliente->correo }}" class="form-control">
                        </div>
                        <div class="col-md-3">
                                <label for="">ESTADO CIVIL</label>
                                <select name="estado_civil_id" id="estado_civil_id" value="{{ $cliente->estado_civil_id }}"class="form-control">
                                    <option value="">--seleccionar</option>
                                    @foreach($estadoCivil as $ec)
                                    <option value="{{ $ec->id }}">{{$ec->nombre}}</option>
                                    @endforeach            
                                </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <input type="submit" value="Actualizar" class="btn btn-success btn-block">
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('cliente.index')}}" class="btn btn-danger btn-block">
                                Cancelar
                            </a>
                        </div>   
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection