@extends('template.sb.index')
@section('titulo', 'Informacion Personal')
@section('contenido')

    <div class="card">
            <div class="card-header">
                <h4 class="text-center">INFORMACION PERSONAL</h4>
            </div>
        <div class="card-body">
            <form action="{{ route('cliente.show', $cliente->id)}}" method="post">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">NOMBRE:</label>
                            <input type="text" name="nombre" id="nombre" value="{{ $cliente->nombre }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">APELLIDOS:</label>
                            <input type="text" name="apellido" id="apellido" value="{{ $cliente->apellido }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">CEDULA:</label>
                            <input type="text" name="ci" id="ci" value="{{ $cliente->ci }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">DIRECCION:</label>
                            <input type="text" name="direccion" id="direccion" value="{{ $cliente->direccion }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">CELULAR:</label>
                            <input type="" name="celular" id="celular" value="{{ $cliente->celular }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">FECHA DE NACIMIENTO:</label>
                            <input type="" name="fecha_nac" id="fecha_nac" value="{{ $cliente->fecha_nac }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">CORREO ELECTRONICO:</label>
                            <input type="email" name="correo" id="correo" value="{{ $cliente->correo }}" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">ESTADO CIVIL:</label>
                            <input type="text" name="estado_civil_id" id="estado_civil_id" value="{{ $cliente->estado_civil_id }}" class="form-control">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="{{ route('cliente.index')}}" class="btn btn-success btn-block">
                                Volver a Inicio
                            </a>
                        </div>   
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection