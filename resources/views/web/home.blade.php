@extends('layouts.web')

@section('title', 'Cuidamos Tu Casa')


@section('content')

<section class="hero-wrap js-fullheight" style="background-image: url('/web/images/venta.jpg');" data-section="home">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }"> <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Cuidamos de tu casa, mientras no estás</h1>
                <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Disfruta de la tranquilidad de que alguien cuide de tu casa mientras no estás</p>
                <div><a href="{{ route('register') }}"><button class="text-center btn btn-primary py-3 px-5 mr-5">Registrarse</button></a> <a href="{{ route('login') }}"><button class="text-center btn btn-primary py-3 px-5">Iniciar Sesión</button></a></div>
            </div>
            
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
                    <p>Cuidamos tu Casa es una empresa dedicada a cuidar tu casa mientras tú no estás, para que puedas tener la tranquilidad de saber que tu hogar está en las mejores manos.</p>
                    <p>Te avisamos de cualquier desperfecto. Años de experiencia en el sector inmobiliario nos avalan.</p>
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
            <p>Nos dedicamos a cuidar tu casa mientras tú no estás a través de los siguientes servicios</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 testimonial">
            <div class="carousel-project owl-carousel">
                <div class="item">
                    <div class="project">
                        <div class="img">
                            <img src="/web/images/supervision.jpg" class="img-fluid" alt="Colorlib Template">
                            <a href="/web/images/supervision.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="icon-expand"></span>
                            </a>
                        </div>
                        <div class="text px-4">
                            <h3><a href="#">Supervisión</a></h3>
                            <span>Hacemos una visita periódica para supervisar cualquier eventualidad</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="project">
                        <div class="img">
                            <img src="/web/images/cuidado.jpg" class="img-fluid" alt="Colorlib Template">
                            <a href="/web/images/cuidado.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="icon-expand"></span>
                            </a>
                        </div>
                        <div class="text px-4">
                            <h3><a href="#">Cuidamos de tu Casa</a></h3>
                            <span>Gestión y Tramitación de averías, puertas de acceso, vallado, terrazas, toldos, retiradas de escombros, etc.</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="project">
                        <div class="img">
                            <img src="/web/images/limpieza.jpg" class="img-fluid" alt="Colorlib Template">
                            <a href="/web/images/limpieza.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="icon-expand"></span>
                            </a>
                        </div>
                        <div class="text px-4">
                            <h3><a href="#">Limpieza</a></h3>
                            <span>Servicio de Lavandería y Limpieza. Nuestro equipo especializado se encargará de cubrir con la máxima calidad todas tus necesidades</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="project">
                        <div class="img">
                            <img src="/web/images/key.jpg" class="img-fluid" alt="Colorlib Template">
                            <a href="/web/images/key.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="icon-expand"></span>
                            </a>
                        </div>
                        <div class="text px-4">
                            <h3><a href="#">Key keepers</a></h3>
                            <span>Tenemos unas llaves de tu casa por todos esos imprevistos que puedan suceder cuando no estas o quizás  se te hayan olvidado</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="project">
                        <div class="img">
                            <img src="/web/images/mantenimiento.jpg" class="img-fluid" alt="Colorlib Template">
                            <a href="/web/images/mantenimiento.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="icon-expand"></span>
                            </a>
                        </div>
                        <div class="text px-4">
                            <h3><a href="#">Mantenimiento</a></h3>
                            <span>Mantenimiento de jardín y piscina</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="project">
                        <div class="img">
                            <img src="/web/images/lluvia.jpg" class="img-fluid" alt="Colorlib Template">
                            <a href="/web/images/lluvia.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                                <span class="icon-expand"></span>
                            </a>
                        </div>
                        <div class="text px-4">
                            <h3><a href="#">Temporadas de lluvias</a></h3>
                            <span>Limpieza y revisión de desagües. Mantenimiento y desatasco de imbornales.</span>
                        </div>
                    </div>
                </div>
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
        <p>Cada cliente es un mundo, por lo tanto, estan en todo su derecho de opinar segun la calidad de nuestros servicios</p>
    </div>
</div>
<div class="row ftco-animate justify-content-center">
    <div class="col-md-12 d-flex align-items-center">
        <div class="carousel-testimony owl-carousel">
            <div class="item">
                <div class="testimony-wrap d-flex align-items-stretch">
                  <div class="user-img d-flex align-self-stretch" style="background-image: url(/web/images/testimony-1.jpg)">
                  </div>
                  <div class="text d-flex align-items-center">
                    <div>
                        <div class="icon-quote">
                            <span class="icon-quote-left"></span>
                        </div>
                        <p class="mb-4">"Tenemos un pequeño chalet que heredamos de mis suegros. Mi mujer le tiene especial aprecio. Sin embargo, en muchas ocasiones, me es imposible ir a pasar una temporadas y saber si estan en las mejores condiciones. Mi mujer siempre estaba preocupada por si algo de la casa fallaba. Desde que contratamos los servicios de <strong>Cuidamos tu casa</strong> mi mujer está mas tranquila"</p>
                        <p class="name">José Antonio Martín</p>
                        <span class="position">Cliente Satisfecho</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="testimony-wrap d-flex align-items-stretch">
              <div class="user-img d-flex align-self-stretch" style="background-image: url(/web/images/about-1.jpg)">
              </div>
              <div class="text d-flex align-items-center">
                <div>
                    <div class="icon-quote">
                        <span class="icon-quote-left"></span>
                    </div>
                    <p class="mb-4">Gracias al esfuerzo de la familia hemos podido hacernos de otra casa en la playa, asi que vamos a pasar casi todo el verano con los niños, sin embargo en invierno simepre estoy preocupada si por si algo le falla a la casa como el aire acondicionado o las calderas, una amiga me recomendo los servicios de <strong>Cuidamos tu casa</strong> y sinceramente en el invierno estamos mas tarnquilos de nuestra casa de la playa.</p>
                    <p class="name">Carmen Núñez</p>
                    <span class="position">Cliente Satisfecho</span>
                </div>
            </div>
        </div>
    </div>
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
        <p>Si te interesa comprar, vender o alquilar alguna vivienda, estas en la sección correcta.</p>
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
        <p>Cuenta con nuestro equipo para Cuidar de Tu Casa mientras no estas. Déjanos tus datos y lo más pronto posible nos comunicaremos contigo.</p>
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
            <p>Avda Santander, 23 Bajo Noja (Cantabria)</p>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 d-flex">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-phone2"></span>
            </div>
            <h3 class="mb-4">Número de Contacto</h3>
            <p><a href="tel://942631584">968 192 093</a></p>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 d-flex">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-paper-plane"></span>
            </div>
            <h3 class="mb-4">Correo Electrónico</h3>
            <p><a href="mailto:info@cuidamostucasa.net">info@cuidamostucasa.net</a></p>
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
@endsection