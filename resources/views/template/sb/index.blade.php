<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('titulo')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sb/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sb/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar AQUI SE PUEDE CAMBIAR EL COLOR DE NAVBAR LA PARTE DE ARRIBA -->

        <ul class="navbar-nav bg-gradient-danger     sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                <i class="fa fa-home" aria-hidden="true" style="color: #556A77;"></i>
                </div>
                <div class="sidebar-brand-text mx-3" style="color: #AAEFDF;">INICIO<sup></sup></div>
            </a>

            <!-- Divider ESTA OPCION ES PARA INDICAR LA DIVISION QUE EXISTE ENTRE OBJETOS -->
            
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                <img class="img-profile rounded-circle"
                    src="../public/images/1.jpg">
                    <span class="sidebar-brand-text mx-1">BIENVENIDOS</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

    <!-- AQUI ESTA LOS OBJETOS DE INTERFACE, COMPONENTES, Y UTILITIS -->

            <!-- Heading -->
            <div class="sidebar-heading">
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-user-check"></i>
                    <span>ADMINISTRADOR</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-secondary py-2 collapse-inner rounded">
                        <h6 class="collapse-header" style="color: #EEEEFF;">Directorio</h6>
                        <a class="collapse-item" href="{{ route('persona.index')}}"><i class="fas fa-users"></i><span>  @ Personas</span></a>
                        <div class="collapse-divider"></div>
                        <a class="collapse-item" href="{{ route('cliente.index')}}"><i class="fas fa-user"></i><span>  @ Clientes</span></a>
                        <div class="collapse-divider"></div>
                        <a class="collapse-item" href="#"><i class="fas fa-user"></i><span>  @ Usuarios</span></a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <hr class="sidebar-divider">

            

            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-clipboard-list"></i>
                    <span>Categoria</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-shopping-cart"></i>
                    <span>Compras</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-cart-arrow-down"></i>
                    <span>Ventas</span></a>
            </li>

           

            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-warehouse"></i>
                    <span>Almacen</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-store-alt"></i>
                    <span>Productos</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-address-book"></i>
                    <span>Proveedores</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-users"></i>
                    <span>Empleados</span></a>
            </li>
            

            <li class="nav-item">
                <a class="nav-link" href="#">
                <i class="fas fa-cog"></i>
                  <span>Configuracion</span></a>
            </li>

    <!-- AQUI ESTABA LAS TABLAS -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar AQUI SE PUEDE MODIFICAR LOS COLORES DEL ENCABEZADO CON STYLE COLOR CAMBIAMOS LOS COLORES-->
            <nav class="navbar navbar-expand navbar-light bg-danger topbar mb-4 static-top shadow">
            <li class="nav-item active">
                <a class="nav-link" href="#">  
                <i class="fas fa-align-justify fa-lg" style="color: #AAEFDF;"></i>          
                    <span class="sidebar-brand-text mx-4" style="color: #AAEFDF;">RESTAURANTE GASTRONOMICO   "EL BUEN SABOR"</span></a>
            </li>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                     <!-- AQUI ESTABA EL BUSCADOR  -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->

                        </li>

                        <!-- Nav Item - Alerts BUSCADOR DEL NAVAR-->
                        
                            <nav class="navbar navbar-light bg-danger" >
                            
                                <div class="container-fluid">
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                                        <button class="btn btn-outline-dark" type="submit" ><i class="fas fa-search fa-fw"></i></button>
                                    </form>
                                </div>
                            </nav>
                        <!-- Nav Item - Messages -->
                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-ligth-600 small">Admin</span>
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfiles
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuracion
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{asset('/home') }}" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    @yield('contenido')

                </div>
                <!-- /.container-fluid -->
            </div>
              
            <!-- End of Main Content -->
           

            <!-- Footer -->
            <footer class="sticky-footer bg-ligth">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Restaurante Gastronomico "El Buen Sabor" 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Listo para irse?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona "Cerrar Sesion" a continuación si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="{{ url('/home') }}">Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sb/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('sb/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sb/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('sb/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sb/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{ asset('sb/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>