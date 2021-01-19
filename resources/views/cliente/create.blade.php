@extends('template.sb.index')
@section('titulo', 'Registrar Cliente')
@section('contenido')

    <div class="card">
            <div class="card-header">
                <h4 class="text-center">FORMULARIO DE CLIENTE</h4>
            </div>
        <div class="card-body">
            <form action="{{ route('cliente.store')}}" method="post">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">NOMBRE</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">APELLIDOS</label>
                            <input type="text" name="apellido" id="apellido" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">CEDULA</label>
                            <input type="text" name="ci" id="ci" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">CELULAR</label>
                            <input type="text" name="celular" id="celular" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">FECHA DE NACIMIENTO</label>
                            <input type="date" name="fecha_nac" id="fecha_nac" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">CORREO ELECTRONICO</label>
                            <input type="email" name="correo" id="correo" class="form-control">
                        </div>
                        <div class="col-md-3">
                                <label for="">ESTADO CIVIL</label>
                                <select name="estado_civil_id" id="estado_civil_id" class="form-control">
                                    <option value="">--seleccionar</option>
                                    @foreach($estadoCivil as $ec)
                                    <option value="{{ $ec->id }}">{{$ec->nombre}}</option>
                                    @endforeach            
                                </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">DIRECCION</label>
                            <input type="text" name="direccion" id="direccion" class="form-control">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <input type="submit" value="Registrar" class="btn btn-success btn-block">
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