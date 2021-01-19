@extends('template.sb.index')
@section('titulo', 'Listado de cliente')
@section('contenido')

    <div class="card">
        <div class="card-header">
            <div class="container">
                <h4 class="text-center">LISTADO CLIENTE</h4>
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route('cliente.create')}}" class="btn btn-success btn-block">
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
                                    @foreach($clientes as $cliente)
                                    <tr>
                                        <td>{{$cliente->id}}</td>
                                        <td>{{$cliente->nombre}}</td>
                                        <td>{{$cliente->apellido}}</td>
                                        <td>{{$cliente->ci}}</td>
                                        <td>{{$cliente->direccion}}</td>
                                        <td>{{$cliente->celular}}</td>
                                        <td>{{$cliente->acciones}} 
                                        <a href="{{ route('cliente.show', $cliente->id)}}"><i class="fas fa-eye btn btn-sm btn-warning"></i></a> | 
                                        <a href="{{ route('cliente.edit', $cliente->id)}}"><i class="fas fa-edit btn btn-sm btn-primary"></i></a> | 
                                        <form action="{{ route('cliente.destroy', $cliente->id)}}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger btn-sm" value="Eliminar"> 
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $clientes->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

