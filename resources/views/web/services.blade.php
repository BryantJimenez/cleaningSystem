@extends('layouts.web')

@section('title', 'Cuidamos Tu Casa')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/dropify/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
@endsection


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('web/images/services.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h1 class="mb-3 bread">Servicios</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Servicios</a></span> </p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center order-lg-last ftco-animate">
        <h2 class="mb-3">Nuestros Servicios</h2>
        <p>Descubre todo lo que podemos ofrecerte en Cuidamos de tu Casa. Desde el mantenimiento de tu vivienda o el cuidado de llaves hasta la gestión y tramitación de averías. Más de diez años de experiencia nos avalan para que tú descanses con tranquilidad mientras nosotros cuidamos de tu hogar</p>

        <section class="ftco-section" data-section="services">
          <div class="container">
            <div class="row d-flex">
              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a href="single.html" class="block-20" style="background-image: url('/web/images/key.jpg');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h3 class="heading"><a href="single.html">Key Keepers</a></h3>
                    <p>Tenemos unas llaves de tu casa por todos esos imprevistos que puedan suceder cuando no estas o quizás se te hayan olvidado</p>
                    <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Comprar <span class="ion-ios-cart"></span></a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">00.0$</a>

                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a href="single.html" class="block-20" style="background-image: url('/web/images/control.jpg');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h3 class="heading"><a href="single.html">Control y revisión general de tu vivienda</a></h3>
                    <p>Nos encargamos de que tu casa sea segura y esté en perfectas condiciones. Así, si existe algún tipo de desperfecto o avería, la detectaremos rápidamente.</p>
                    <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Comprar <span class="ion-ios-cart"></span></a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">00.0$</a>

                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                  <a href="single.html" class="block-20" style="background-image: url('/web/images/calefaccion.png');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h3 class="heading"><a href="single.html">Puesta en marcha de calderas y calefacción</a></h3>
                    <p>Nos encargamos de poner en marcha tu caldera para que todo funciones cuando llegues.</p>
                    <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Comprar <span class="ion-ios-cart"></span></a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">00.0$</a>

                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a href="single.html" class="block-20" style="background-image: url('/web/images/piscinas.jpg');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h3 class="heading"><a href="single.html">Mantenimiento de piscinas y jardines</a></h3>
                    <p>Cuidamos de tus plantas, árboles o cualquier tipo de flora. Además, nos encargamos de la limpieza y mantenimiento de tu piscina.</p>
                    <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Comprar <span class="ion-ios-cart"></span></a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">00.0$</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a href="single.html" class="block-20" style="background-image: url('/web/images/acceso.jpg');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h3 class="heading"><a href="single.html">Acceso y acompañamos a técnicos</a></h3>
                    <p>Si hay que realizar una revisión o arreglo nosotros mismos acompañamos a los técnicos y profesionales para que no tengas que preocuparte de nada.</p>
                    <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Comprar <span class="ion-ios-cart"></span></a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">00.0$</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a href="single.html" class="block-20" style="background-image: url('/web/images/imbornales.jpg');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h3 class="heading"><a href="single.html">Mantenimiento de imbornales</a></h3>
                    <p>Nos encargamos del mantenimiento de los sumideros de toda la casa, jardín o piscina para que no tengas que preocuparte por ellos.</p>
                    <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Comprar <span class="ion-ios-cart"></span></a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">00.0$</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a href="single.html" class="block-20" style="background-image: url('/web/images/averias.jpeg');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h3 class="heading"><a href="single.html">Gestión y tramitación de averías</a></h3>
                    <p>Si existe algún desperfecto o avería en tu casa te ofrecemos la posibilidad de tramitarlos con los mejores profesionales de cada sector</p>
                   <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Comprar <span class="ion-ios-cart"></span></a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">00.0$</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a href="single.html" class="block-20" style="background-image: url('/web/images/limpie.jpg');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h3 class="heading"><a href="single.html">Servicio de lavandería y limpieza</a></h3>
                    <p>Contamos con el servicio de limpieza más profesional para que tu casa esté impoluta en todo momento.</p>
                    <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Comprar <span class="ion-ios-cart"></span></a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">00.0$</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a href="single.html" class="block-20" style="background-image: url('/web/images/equipamiento.jpeg');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h3 class="heading"><a href="single.html">Revisión de instalaciones y equipamientos</a></h3>
                    <p>Nos encargamos de revisar todo tu equipamiento para que estén en perfecto estado y para evitar que te lleves ningún disgusto.</p>
                    <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Comprar <span class="ion-ios-cart"></span></a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">00.0$</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>








      </div> <!-- .col-md-8 -->


    </div>
  </div>
</section> <!-- .section -->

@endsection

@section('scripts')
<script src="{{ asset('/admins/vendor/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/jquery.validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/additional-methods.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/messages_es.js') }}"></script>
<script src="{{ asset('/admins/js/validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
@endsection