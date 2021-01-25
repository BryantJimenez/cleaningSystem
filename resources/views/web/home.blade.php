@extends('layouts.web')

@section('title', 'Cuidamos Tu Casa')

@section('links')
{{-- MAPA --}}
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
@endsection



@section('content')

<section class="hero-wrap js-fullheight" style="background-image: url('/web/images/venta.jpg');" data-section="home">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }"> <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $section->title }}</h1>
                <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $section->subtitle }}</p>
                @guest
                <div>
                    <a href="{{ route('register') }}"><button class="text-center btn btn-primary py-3 px-5 mr-5">Registrarse</button></a> 

                    <a href="{{ route('login') }}"><button class="text-center btn btn-primary py-3 px-5">Iniciar Sesión</button></a>
                </div>
                @else
                <div>
                    <a href="{{ route('admin') }}"><button class="text-center btn btn-primary py-3 px-5">Ir al Panel Administrativo</button></a>
                </div>
                @endguest
            </div>

        </div>
    </section>


    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about">
        <div class="container">
            <div class="row d-flex">

                <div class="col-md-6 col-lg-12 pl-lg-5 py-5">
                    <div class="row justify-content-start pb-3">
                      <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Nosotros</span>
                        <h2 class="mb-4">Sobre Nosotros</h2>
                        {!! $section->about !!}
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate d-flex">
                    <div class="block-18 text-center p-4 mb-4 align-self-stretch d-flex">
                      <div class="text">
                        <strong class="number" data-number="100">0</strong>%
                        <span>Profesionales</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate d-flex">
                <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
                  <div class="text">
                    <strong class="number" data-number="100">0</strong>%
                    <span>Transparencia</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate d-flex">
            <div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
              <div class="text">
                <strong class="number" data-number="100">0</strong>%
                <span>Compromiso</span>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
</section>

<section class="ftco-section ftco-project bg-light" data-section="projects">
    <div class="container-fluid px-md-5">

        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Servicios</span>
            <h2 class="mb-4">Nuestros Servicios</h2>
            <p>{{$section->services}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 testimonial">
            <div class="carousel-project owl-carousel">
                @foreach($services as $service)
                <div class="item">
                    <div class="project">
                        <div class="img">
                            <img src="{{ asset('/admins/img/services/'.$service->photo) }}" class="img-fluid" alt="Colorlib Template">
                            <a href="{{ asset('/admins/img/services/'.$service->photo) }}" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="icon-expand"></span>
                            </a>
                        </div>
                        <div class="text px-4">
                            <h3><a href="#">{{$service->name}}</a></h3>
                            <span>{{$service->description}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <div class="row justify-content-center pb-5 mt-5">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <a href="{{ route('services') }}"><button class="text-center btn btn-primary py-3 px-5"> Ver Más</button></a>
    </div>
</div>
</div>
</section>


<section class="testimony-section" data-section="testimony">
  <div class="container">
    <div class="row justify-content-center mb-5 mt-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Opiniones</span>
        <h2 class="mb-4">Nuestros Clientes Opinan</h2>
        <p>{{$service->opinion}}</p>
    </div>
</div>
<div class="row ftco-animate justify-content-center">
    <div class="col-md-12 d-flex align-items-center">
        <div class="carousel-testimony owl-carousel">
            @foreach($opinions as $opinion)
            <div class="item">
                <div class="testimony-wrap d-flex align-items-stretch">
                  <div class="user-img d-flex align-self-stretch" style="background-image: url({{ asset('/admins/img/opinions/'.$opinion->photo) }})">
                  </div>
                  <div class="text d-flex align-items-center">
                    <div>
                        <div class="icon-quote">
                            <span class="icon-quote-left"></span>
                        </div>
                        <p class="mb-4">{!!$opinion->opinion!!}</p>
                        <p class="name">{{$opinion->name}}</p>
                        <span class="position">{{$opinion->position}}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>
</div>
</div>
</section>

<section class="ftco-section bg-light" data-section="blog">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Viviendas</span>
        <h2 class="mb-4">Todas nuestras Viviendas disponibles</h2>
        <p>{{$section->households}}</p>
    </div>
</div>
<div class="row d-flex">
  <div class="col-md-4 d-flex ftco-animate">
    <div class="blog-entry justify-content-end">
      <a href="single.html" class="block-20" style="background-image: url('/web/images/image_1.jpg');">
      </a>
      <div class="text mt-3 float-right d-block">
        <h3 class="heading"><a href="single.html">Casa de Dos Plantas - Madrid</a></h3>
        <p>Hermosa casa de dos plantas, cuatro baños, tres habitaciones, perfecta para el invierno.</p>
        <div class="d-flex align-items-center mt-4 meta">
            <p class="mb-0"><a href="{{ route('more') }}" class="btn btn-secondary">Ver Más <span class="ion-ios-arrow-round-forward"></span></a></p>
            <p class="ml-auto mb-0">
                <a href="#" class="mr-2">En Alquiler</a>
                
            </p>
        </div>
    </div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate">
    <div class="blog-entry justify-content-end">
      <a href="single.html" class="block-20" style="background-image: url('/web/images/image_2.jpg');">
      </a>
      <div class="text mt-3 float-right d-block">
        <h3 class="heading"><a href="single.html">Apartamento - Barcelona</a></h3>
        <p>Espaioso y comodo apartamento de tres habitaciones, un baño y aire acondicionado</p>
        <div class="d-flex align-items-center mt-4 meta">
            <p class="mb-0"><a href="{{ route('more') }}" class="btn btn-secondary">Ver Más <span class="ion-ios-arrow-round-forward"></span></a></p>
            <p class="ml-auto mb-0">
                <a href="#" class="mr-2">En Venta</a>
                
            </p>
        </div>
    </div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate">
    <div class="blog-entry">
      <a href="single.html" class="block-20" style="background-image: url('/web/images/image_3.jpg');">
      </a>
      <div class="text mt-3 float-right d-block">
        <h3 class="heading"><a href="single.html">Casa de Playa - Madrid</a></h3>
        <p>Elegante y calida casa de playa de una plata, dos baños, y vista al mar</p>
        <div class="d-flex align-items-center mt-4 meta">
            <p class="mb-0"><a href="{{ route('more') }}" class="btn btn-secondary">Ver Más <span class="ion-ios-arrow-round-forward"></span></a></p>
            <p class="ml-auto mb-0">
                <a href="#" class="mr-2">En Alquiler</a>
                
            </p>
        </div>
    </div>
</div>
</div>

<div class="col-md-4 d-flex ftco-animate">
    <div class="blog-entry justify-content-end">
      <a href="single.html" class="block-20" style="background-image: url('/web/images/image_1.jpg');">
      </a>
      <div class="text mt-3 float-right d-block">
        <h3 class="heading"><a href="single.html">Casa de Dos Plantas - Madrid</a></h3>
        <p>Hermosa casa de dos plantas, cuatro baños, tres habitaciones, perfecta para el invierno.</p>
        <div class="d-flex align-items-center mt-4 meta">
            <p class="mb-0"><a href="{{ route('more') }}" class="btn btn-secondary">Ver Más <span class="ion-ios-arrow-round-forward"></span></a></p>
            <p class="ml-auto mb-0">
                <a href="#" class="mr-2">En Alquiler</a>
                
            </p>
        </div>
    </div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate">
    <div class="blog-entry justify-content-end">
      <a href="single.html" class="block-20" style="background-image: url('/web/images/image_2.jpg');">
      </a>
      <div class="text mt-3 float-right d-block">
        <h3 class="heading"><a href="single.html">Apartamento - Barcelona</a></h3>
        <p>Espaioso y comodo apartamento de tres habitaciones, un baño y aire acondicionado</p>
        <div class="d-flex align-items-center mt-4 meta">
            <p class="mb-0"><a href="{{ route('more') }}" class="btn btn-secondary">Ver Más <span class="ion-ios-arrow-round-forward"></span></a></p>
            <p class="ml-auto mb-0">
                <a href="#" class="mr-2">En Venta</a>
                
            </p>
        </div>
    </div>
</div>
</div>
<div class="col-md-4 d-flex ftco-animate">
    <div class="blog-entry justify-content-end">
      <a href="single.html" class="block-20" style="background-image: url('/web/images/image_1.jpg');">
      </a>
      <div class="text mt-3 float-right d-block">
        <h3 class="heading"><a href="single.html">Casa de Dos Plantas - Madrid</a></h3>
        <p>Hermosa casa de dos plantas, cuatro baños, tres habitaciones, perfecta para el invierno.</p>
        <div class="d-flex align-items-center mt-4 meta">
            <p class="mb-0"><a href="{{ route('more') }}" class="btn btn-secondary">Ver Más <span class="ion-ios-arrow-round-forward"></span></a></p>
            <p class="ml-auto mb-0">
                <a href="#" class="mr-2">En Alquiler</a>
                
            </p>
        </div>
    </div>
</div>
</div>
</div>
<div class="row justify-content-center pb-5 mt-5">
  <div class="col-md-12 heading-section text-center ftco-animate">
    <a href="{{ route('households') }}"><button class="text-center btn btn-primary py-3 px-5"> Ver Más</button></a>
</div>
</div>
</div>
</section>

<section class="ftco-section contact-section ftco-no-pb" data-section="contact">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Contacto</span>
        <h2 class="mb-4">Contactáctanos</h2>
        <p>{{$service->contact}}</p>
    </div>
</div>
<div class="row no-gutters block-9">
  <div class="col-md-6 order-md-last d-flex">
    <form action="#" class="bg-light p-5 contact-form">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Nombre">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Correo">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Asunto">
    </div>
    <div class="form-group">
        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Enviar" class="btn btn-secondary py-3 px-5">
    </div>
</form>

</div>

<div class="col-md-6 d-flex">
    <div id="map" class="bg-white"></div>
</div>
</div>
</div>
</section>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-6 col-lg-4 d-flex">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-map-signs"></span>
            </div>
            <h3 class="mb-4">Dirección</h3>
            <p>{{$section->address}}</p>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 d-flex">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-phone2"></span>
            </div>
            <h3 class="mb-4">Número de Contacto</h3>
            <p><a href="tel://942631584">{{$section->phone_1}}</a></p>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 d-flex">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-paper-plane"></span>
            </div>
            <h3 class="mb-4">Correo Electrónico</h3>
            <p><a href="mailto:info@cuidamostucasa.net">{{$section->email}}</a></p>
        </div>
    </div>
</div>
</div>
</section>


@endsection

@section('scripts')
<!-- Lightgallery -->
<script type="text/javascript" src="{{ asset('/admins/vendor/lightgallery/lightgallery.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admins/vendor/lightgallery/lg-thumbnail.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admins/vendor/lightgallery/lg-fullscreen.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admins/vendor/lightgallery/lg-zoom.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('/web/js/google-map.js') }}"></script>
@endsection