<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DE USUARIOS</title>
    <style>
        body{
            font-size: 9px;
            font-family: sans-serif;
        }
        table{
            border-collapse: separate;
            border-spacing: 0px;             
        }
        table td{
            border: 1px solid #333;
            padding: 4px;
        }
        table th{
            border: 1px solid #333;
            padding: 4px;
            background-color: #ddd;
        }
        .title-box{
            width: 100%
        } 
        .title{
            font-size: 13px;
            font-weight: bold;
            text-align: left;
        }
        .fecha_actual{
            font-size: 8px;
            margin-top: 10px;
        }
         
</style>
</head>
    <body>
    <div class="title-box">
        <div class="container">
            <span class="title">REPORTE DE USUARIOS </span>
            </div>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE COMPLETO</th>
                        <th>CEDULA</th>
                        <th>DIRECCION</th>
                        <th>TIPO DE USUARIO</th>
                        <th>EMAIL</th>
                        <th>CREATED_AT</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->persona->nombre}} {{$usuario->persona->apellido}}</td>
                            <td>{{$usuario->persona->ci}}</td>
                            <td>{{$usuario->persona->direccion}}</td>
                            <td>{{$usuario->tipo_usuario->nombre}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->created_at}}</td>
                        </tr>
                    @endforeach    
                </tbody>
            </table>
            <div class="fecha_actual"><em>Fecha de Emision:{{$fecha_actual}}</em></div>
        </div>
    </body>
</html>