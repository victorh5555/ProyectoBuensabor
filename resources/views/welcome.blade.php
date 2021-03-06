
@extends('layouts.plantilla')

@section('title', 'INICIO')

@section('content')
    <!-- Contenido -->

<div class="container">
    <div class="antialiased">
        <div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>  
    </div>
    </div>
    
        <!-- Categorías -->
 <section class="content de líquido del recipiente">
        <div class="row justify-content-center">
            <div class="col-1 col-md-12">
                <nav class="text-center my-3">
                    <div class="text-center">
                        <h1>NUESTRO MENU DIARIO</h1>
                    </div>
                    <a href="#" class="mx-3 pb-3-link categoría d-bloque d-md-inline seleccionado-categoría"></a>
                    <a href="#" class="mx-3 pb-3-link categoría d-bloque d-md-inline"></a>
                    <a href="#" class="mx-3 pb-3-link categoría d-bloque d-md-inline"></a>
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
                                El Silpancho, viene acompañado de arroz, ensalada, huevo frito. 
                                tomates y cebollas en cubos, y papas. acompáñalo con llajwa
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
                            <img class="card-img-top" src="{{asset('images/Plato Paceño.png')}}" alt="Publicar Python">
                            <div class="card-body">
                                <small class="card-txt-category"> MENU: PLATO PACEÑO </small>
                                <h5 class="card-title my-2"> Plato Paceño </h5>
                                <div class="d-card-text">
                                Esta comida, que es preparada con choclos, papas, habas y queso y acompañada 
                                con salsa picante o llajwa, pertenece a la época colonial, 
                                indica el portal oficial de la Alcaldía paceña.
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
                            <img class="card-img-top" src="{{asset('images/Charque.png')}}" alt="Publicar Python">
                            <div class="card-body">
                                <small class="card-txt-category"> MENU: CHARQUEKAN </small>
                                <h5 class="card-title my-2"> Charque Can </h5>
                                <div class="d-card-text">
                                Plato originario del departamento de Oruro. Consiste en carne (de res o de llama) 
                                desmenuzada y deshidratada, mediante su exposición al sol con sal, acompañada 
                                con queso fresco de vaca, patatas con cáscara, mote. 
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
                            <img class="card-img-top" src="{{asset('images/Pollo al Horno.png')}}" alt="Publicar Python">
                            <div class="card-body">
                                <small class="card-txt-category"> MENU: POLLO AL HORNO </small>
                                <h5 class="card-title my-2"> Pollo al Horno </h5>
                                <div class="d-card-text">
                                Pollo al Horno viene acompañado con arroz, papa hervida 
                                enviar al horno engrasado colocar el pollo, pincelar (untar) 
                                con mostaza, espolvorear con el ají. Rellenar la cavidad con la pulpa de mango.
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

