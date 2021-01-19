@extends('template.sb.index')
@section('titulo', 'Listado de personas')
@section('contenido')

    <div class="card">
        <div class="card-header">
            <div class="container">
                <h4 class="text-center">LISTADO PERSONA</h4>
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route('persona.create')}}" class="btn btn-primary btn-block">
                             + Agregar Nuevo
                        </a>
                    </div>
                </div>
            </div>  
        </div>
        <br>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-stripped" style="color: #5B5F97">
                                <thead style="background: #EEEEFF;">
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>APELLIDOS</th>
                                        <th>CEDULA</th>
                                        <th>DIRECCION</th>
                                        <th>CELULAR</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($personas as $persona)
                                    <tr>
                                        <td>{{$persona->id}}</td>
                                        <td>{{$persona->nombre}}</td>
                                        <td>{{$persona->apellido}}</td>
                                        <td>{{$persona->ci}}</td>
                                        <td>{{$persona->direccion}}</td>
                                        <td>{{$persona->celular}}</td>
                                        <td>{{$persona->acciones}} 
                                        <a href="{{ route('persona.show', $persona->id)}}"><i class="fas fa-eye btn btn-sm btn-warning"></i></a> | 
                                        <a href="{{ route('persona.edit', $persona->id)}}"><i class="fas fa-edit btn btn-sm btn-primary"></i></a> | 
                                        <form action="{{ route('persona.destroy', $persona->id)}}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger btn-sm" value="Eliminar"> 
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $personas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
