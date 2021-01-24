@extends('layouts.plantilla')

@section('title', 'HOMEPAGE')

@section('content')
    <!-- Contenido -->

    <section class="content de líquido del recipiente">

        <!-- Categorías -->

        <div class="row justify-content-center">
            <div class="col-1 col-md-12">
                <nav class="text-center my-5">
                    <a href="#" class="mx-3 pb-3-link categoría d-bloque d-md-inline seleccionado-categoría"> BIENVENIDOS </a>
                    <a href="#" class="mx-3 pb-3-link categoría d-bloque d-md-inline">  AL RESTAURANTE </a>
                    <a href="#" class="mx-3 pb-3-link categoría d-bloque d-md-inline"> EL BUEN GUSTO </a>
                </nav>
            </div>
        </div>

        <!-- Publicaciones -->

        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">

                    <!-- Publicación 1 -->

                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/Majadito.png')}}" alt="Publicar Python">
                            <div class="card-body">
                                <small class="card-txt-category"> MENU: MAJADITO </small>
                                <h5 class="card-title my-2"> Majadito de charque </h5>
                                <div class="d-card-text">
                                El Majadito de charque viene acompañado de platano maduro y 
                                huevo frito 
                                </div>
                                <a href="#" clase="post-enlace"> <b> Leer más </b> </a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author"> Buen Sabor </span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date"> Hace 2 semanas </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Publicación 2 -->

                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/Laping.png')}}" alt="Publicar Python">
                            <div class="card-body">
                                <small class="card-txt-category"> MENU: LAPING </small>
                                <h5 class="card-title my-2"> Laping </h5>
                                <div class="d-card-text">
                                El Lapping viene acompañado con motes habas, 
                                choclo, solterito y papacocida con cascara, abundante ensalada y aji molido
                                </div>
                                <a href="#" clase="post-enlace"> <b> Leer más </b> </a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author"> Buen Sabor </span>
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
                            <img class="card-img-top" src="{{asset('images/Silpancho.png')}}" alt="Publicar Python">
                            <div class="card-body">
                                <small class="card-txt-category"> MENU: SILPANCHO </small>
                                <h5 class="card-title my-2"> Silpancho </h5>
                                <div class="d-card-text">
                                El Silpancho, viene acompañado de arroz, ensalada, y el huevo frito. 
                                añadir tomates y cebollas en cubos, con papas. acompáñalo con llajwa
                                </div>
                                <a href="#" clase="post-enlace"><b> Leer más </b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author"> Buen Sabor </span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date"> Hace 2 semanas </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Publicación 4 -->    

                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/Majadito.png')}}" alt="Publicar Python">
                            <div class="card-body">
                                <small class="card-txt-category"> MENU: MAJADITO </small>
                                <h5 class="card-title my-2"> Majadito de charque </h5>
                                <div class="d-card-text">
                                El Majadito de charque viene acompañado de platano maduro y 
                                huevo frito 
                                </div>
                                <a href="#" clase="post-enlace"> <b> Leer más </b> </a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author"> Buen Sabor </span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date"> Hace 2 semanas </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Publicación 5 -->

                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/Laping.png')}}" alt="Publicar Python">
                            <div class="card-body">
                                <small class="card-txt-category"> MENU: LAPING </small>
                                <h5 class="card-title my-2"> Laping </h5>
                                <div class="d-card-text">
                                El Lapping viene acompañado con motes habas, 
                                choclo, solterito y papacocida con cascara, abundante ensalada y aji molido
                                </div>
                                <a href="#" clase="post-enlace"> <b> Leer más </b> </a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author"> Buen Sabor </span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date"> Hace 2 semanas </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Publicación 6 -->

                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/Silpancho.png')}}" alt="Publicar Python">
                            <div class="card-body">
                                <small class="card-txt-category"> MENU: SILPANCHO </small>
                                <h5 class="card-title my-2"> Silpancho </h5>
                                <div class="d-card-text">
                                El Silpancho, viene acompañado de arroz, ensalada, y el huevo frito. 
                                añadir tomates y cebollas en cubos, con papas. acompáñalo con llajwa
                                </div>
                                <a href="#" clase="post-enlace"><b> Leer más </b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author"> Buen Sabor </span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date"> Hace 2 semanas </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <!-- Paginador -->

            </div>
        </div>
    </section>

@endsection