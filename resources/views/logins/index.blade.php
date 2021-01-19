<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>REGISTRO USUARIO</title>
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto+Condensed&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="../public/sb/css/estilo/style.css">
            <link rel="stylesheet" href="../public/sb/css/style/style.css">
        <style>  
            body{
                    background-image: url('../public/sb/img/fondo1.jpg');
                    /*background-color: #eeeeee;*/
                    color: #444444;
                    font-family: 'Lobster', cursive;
                    padding: 0px;
                    margin: 0px;                    
                }
        </style>
    </head>

    <body>
        <nav class="navbar navbar navbar-expand-lg navbar">
            <div class="navbar-header navbar-right">
                <a class="navbar-brand" href="#">RESTAURANTE<b> - EL BUEN SABOR</b></a>  		
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-user-o"></i> Iniciar de sesion</a>
                        <ul class="dropdown-menu">
                            <li>
                                <form class="form-inline login-form" action="/examples/actions/confirmation.php" method="post">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Username" required>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="text" class="form-control" placeholder="Password" required>
                                    </div>
                                        <button type="submit" class="btn btn-primary">login</button>
                                </form>                        
                                <form 
                                    class="form-inline login-form" action="/examples/actions/confirmation.php" method="post">
                                </form>                        
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
        <section class="form-register">
            <div class="text-center">
                <h4>BIENVENIDOS</h4>
                <h3>Restaurante</h3>
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 20rem;"
                    src="../public/sb/img/logo.png" alt="">
            </div>
                
                <h4 >Registro de Usuario</h4>

                <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
                <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su apellido">
                <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" >
                <input class="controls" type="password" name="correo" id="correo" placeholder="Ingrese su Contraseña">
                <P>Estoy de acuerdo con los<a href="#"> Términos y Condiciones</a></p>
                <div class="col-md-12">
                <input type="submit" value="REGISTRAR" class="btn btn-primary btn-block">
                </div>
                <P><a href="#">¿Ya Tengo Cuenta?</a></p>
        </sección>
        </div>
        <br>
        <br>
        <footer class="sticky-footer bg-info">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Restaurante Gastronomico "El Buen Sabor" 2021</span>
                    </div>
                </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>