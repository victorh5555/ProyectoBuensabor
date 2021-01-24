@extends('layouts.app')

@section('title', 'HOMEPAGE')

@section('content')

<div class="row justify-content-center">
            <!-- Publicar -->

            <div class="col-12 col-md-7 text-center">
                <h1> Buffet a eleccion  </h1>
                <hr>
                <img src="images/menu.jpg" alt="Publicar Javascript" class="img-fluid">

                <p class="text-left mt-3 post-txt">
                    <span> Desarrollado: Por Restaurante ! El Buen Sabor ¡</span>
                    <span class="float-right"> Publicado: Hace 1 dia </span>
                </p>
                <p class="text-left">
                La empresa gastronómica “El Buen Sabor” inauguraba un restaurante el 4 julio del año 2006 
                donde se podía degustar los típicos sabores de la comida Boliviana, en una época en que la 
                influencia de otras tierras ya empezaba a modificar el legado gastronómico regional.
                ubicada en la Av. Irala # 636 en un principio la empresa dio inicio a sus actividades 
                gastronómicas con 7 platos a elegir, hoy en día cuenta con una variedad de platos a elección 
                para el paladar más exigentes.
                Mediante nuestra página web damos información a nuestros clientes para un mejor 
                servicio ofreciendo nuestro menú del día con sus respectivos precios. 
                </p>
                <p class="text-left post-txt"><i> Categoría: Desarrollo web </i></p>
            </div>

            <!-- Entradas recientes -->

            <div class="col-md-3 offset-md-1">
                <p> NUESTRO MENU DEL DIA: </p>
                <div class="row mb-4">
                    <div class="col-4 p-0">
                        <a href="#">
                            <img src="images/Majadito.png" class="img-fluid redondeado" width="100" alt="">
                        </a>
                    </div>
                    <div class="col-7 pl-0">
                        <a href="#" class="link-post"> MAJADITO DE CHAQUE </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4 p-0">
                        <a href="#">
                            <img src="images/Mondongo.png" class="img-fluid redondeado" width="100" alt="">
                        </a>
                    </div>
                    <div class="col-7 pl-0">
                        <a href="#" class="link-post"> MONDONGO CHUQUISAQUEÑO </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4 p-0">
                        <a href="#">
                            <img src="images/Charque.png" class="img-fluid redondeado" width="100" alt="">
                        </a>
                    </div>
                    <div class="col-7 pl-0">
                        <a href="#" class="link-post"> CHARQUEKAN </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4 p-0">
                        <a href="#">
                            <img src="images/Silpancho.png" class="img-fluid redondeado" width="100" alt="">
                        </a>
                    </div>
                    <div class="col-7 pl-0">
                        <a href="#" class="link-post"> SILPANCHO COCHABAMBINO </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4 p-0">
                        <a href="#">
                            <img src="images/Plato Paceño.png" class="img-fluid redondeado" width="100" alt="">
                        </a>
                    </div>
                    <div class="col-7 pl-0">
                        <a href="#" class="link-post"> PLATO PACEÑO </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4 p-0">
                        <a href="#">
                            <img src="images/Picante.png" class="img-fluid redondeado" width="100" alt="">
                        </a>
                    </div>
                    <div class="col-7 pl-0">
                        <a href="#" class="link-post"> PICANTE DE GALLINA </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Publicaciones relacionadas -->

    <section class="container-fluid content py-5">
        <div class="row justify-content-center">
            <!-- Publicar -->

            <div class ="col-12 text-center">
                <h2> OBJETIVOS GENERALES </h2>
                <hr class="post-hr">
            </div>
            <!-- Publicación 1 -->

            <div class="col-md-4 col-12 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/mision.jpg')}}" alt="Publicar Python">
                    <div class="card-body">
                        <small class="card-txt-category"> Categoría: Programación </small>
                        <h5 class="card-title my-2 "> Nuestra Mision </h5>
                        <div class="d-card-text">
                        El Buen Sabor es un lugar multifuncional que se especializa en la comida Boliviana 
                        ofreciendo servicio a sus clientes en formato de restaurante, realizando platos y bebidas innovadoras
                        y deliciosas con los más altos estándares de calidad de la auténtica cocina Boliviana
                        en el centro de la ciudad de Santa Cruz de la Sierra.
                        El principal compromiso de El Buen Sabor es la satisfacción de las necesidades, 
                        expectativas y deseos de sus clientes a los que les ofrece una carta amplia caracterizada
                        por su variedad, un sabor característico, además de un servicio cercano y personalizado.
                        </div>
                        <a href="#" class="post-enlace"> <b> Leer más </b> </a>
                        <hr>
                        <div class="row">
                            <div class="col-6 text-left">
                                <span class="card-txt-author"> El Buen Sabor </span>
                            </div>
                            <div class="col-6 text-right">
                                <span class="card-txt-date"> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Publicación 2 -->

            <div class="col-md-4 col-12 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/vision.jpg')}}" alt="Publicar Python">
                    <div class="card-body">
                        <small class="card-txt-category"> Categoría: Programación </small>
                        <h5 class="card-title my-2"> Nuestra Vision </h5>
                        <div class="d-card-text">
                        Nuestra empresa se perfila de cara al futuro en una transición escalable 
                        que nos sitúe como uno de los restaurantes más reconocidos de la 
                        ciudad de Santa Cruz de Sierra en nuestra especialidad, 
                        tanto por el sabor como por la calidad de nuestros platos 
                        siendo medido en el nivel de satisfacción de nuestros clientes. 
                        De esta manera El Buen Sabor logrará maximizar sus niveles de rentabilidad, 
                        proporcionando grandes oportunidades para mejorar la calidad de vida
                        de los habitantes de nuestra localidad.
                        </div>
                        <a href="#" class="post-enlace"> <b> Leer más </b></a>
                        <hr>
                        <div class="row">
                            <div class="col-6 text-left">
                                <span class="card-txt-author"> El Buen Sabor </span>
                            </div>
                            <div class="col-6 text-right">
                                <span class="card-txt-date"> Hace 2 semanas </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Publicación 3 -->

            <div class="col-md-4 col-12 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/valores1.png')}}" alt="Publicar Python">
                    <div class="card-body">
                        <small class="card-txt-category"> Categoría: Programación </small>
                        <h5 class="card-title my-2"> Nuestra Valores </h5>
                        <div class="d-card-text">
                        Para El Buen Sabor los valores son importantes ya que guían y describen el trabajo 
                        y servicio que cada cliente encontrará en la experiencia que ofrecemos en nuestra localidad.
                        Los principales valores de El Buen Sabor son: honestidad, solidaridad, confianza, 
                        calidad, responsabilidad y excelencia.
                        Además de tratar de ofrecer una experiencia única a nuestra clientela, 
                        comprometernos con ellos, además de trabajar por la rentabilidad y optimización 
                        de los recursos en nuestro negocio con las mejoras necesarias para alcanzar 
                        nuestros objetivos.
                        </div>
                        <a href="#" class="post-enlace"><b> Leer más </b></a>
                        <hr>
                        <div class="row">
                            <div class="col-6 text-left">
                                <span class="card-txt-author"> El Buen Sabor </span>
                            </div>
                            <div class="col-6 text-right">
                                <span class="card-txt-date"> Hace 2 semanas </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
