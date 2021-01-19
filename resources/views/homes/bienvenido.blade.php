<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BIENVENIDO</title>
        <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto+Condensed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

            #titulo{
                text-align: center;     
            }

            h1{
                color: #444444;
            }

            #galeria{
                width: 90%;
                margin-left: 10%;
                margin-right: 10%;
                display: inline-flex;
            }

            .fotografia{
                width: 20%;
                display: block;
                background-color: #ffffff;
                padding: 5px;
                margin: 5px;
                box-shadow: 5px 3px 10px #aaaaaa;      
            }

            img{
                width: 100%;
                border-radius: 25%;
            }

            .titulofoto{
                font-weight: 700;
                font-size: 20px;
                color: #333333; 
                text-align: center; 
            }

            .descripcionFoto{
                font-size: 15px;
                color: #333333; 
                text-align: center; 
            }
        </style>

        </head> 

        <body>
            <nav class="navbar navbar navbar-expand-lg navbar-">
            <div class="navbar-header" class="text-color">
                <a class="navbar-brand" href="#">RESTAURANTE<b> - EL BUEN SABOR</b></a>  		
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>			
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Nuestra Historia <b class="caret"></b></a>
                        <ul class="dropdown-menu">					
                            <li><a href="#">Quienes Somos</a></li>
                            <li><a href="#">Mision</a></li>
                            <li><a href="#">Vision</a></li>
                            <li><a href="#">Objetivos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Reservas</a></li>
                    <li><a href="#">Horarios</a></li>
                    <li><a href="#">Contactos</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
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
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a data-toggle="" class="dropdown-toggle" href="#"><i class="fa fa-user-o"></i> Registrarse</a>
                        <ul class="dropdown-menu">
                            <li>
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
            <div class="row">
            <div id="titulo">
             <h1>NUESTRO MENU DIARIO</h1>
             <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 20rem;"
                    src="../public/sb/img/logo.png" alt="">
            </div>
            </div>
            </div>
            <div id="galeria">

                <div class="fotografia">
                    <img src="../public/sb/img/Majadito.png"/>
                    <p class="titulofoto">MAJADITO DE CHARQUE</p>
                    <p class="descripcionFoto">El Majadito de charque viene acompañado de platano maduro y 
                        huevo frito</p> 
                </div>

                <div class="fotografia">
                    <img src="../public/sb/img/Laping.png"/>
                    <p class="titulofoto">LAPPING</p>
                    <p class="descripcionFoto">El Lapping viene acompañado con motes habas, 
                        choclo, solterito y papacocida con cascara, abundante ensalada y aji molido</p>        
                </div>   

                <div class="fotografia">
                    <img src="../public/sb/img/Mondongo.png" alt="imagen 3"/>
                    <p class="titulofoto">MONDONGO</p>
                    <p class="descripcionFoto">El Mondongo viene acompañado con mote y papas, tambien con porción de carne de cerdo, 
                        con su caldo picante. Decorado con una pizca de perejil.</p>                    
                </div>
                    
                <div class="fotografia">
                    <img src="../public/sb/img/Silpancho 3.png" alt="imagen 4"/>
                    <p class="titulofoto">SILPANCHO</p>
                    <p class="descripcionFoto">El Silpancho, viene acompañado de arroz, ensalada, y luego el huevo frito. 
                        tambien,añadir los tomates y cebollas en cubos, con papas. acompáñalo con llajwa</p>   
                </div>       
            </div>
        </div>  
    </div>      
        <!-- Footer -->
        <br>
        <footer class="sticky-footer bg-info">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Restaurante Gastronomico "El Buen Sabor" 2021</span>
                    </div>
                </div>
            </footer>
        <!-- End of Footer -->
    </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     </body>
</html>