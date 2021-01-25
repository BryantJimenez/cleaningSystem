@extends('layouts.web')

@section('title', 'Cuidamos Tu Casa')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/dropify/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
@endsection


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('web/images/myhouseholds.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h1 class="mb-3 bread">Mis Viviendas</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Viviendas <i class="ion-ios-arrow-forward"></i></a></span> <span>Mis Viviendas <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 order-lg-last ftco-animate">
        <h2 class="mb-3 text-center">Tus Viviendas</h2>
        <p class="text-center">Visualiza todas y cada una de tus viviendas adquiridas, y/o alquiladas</p>

        <section class="ftco-section" data-section="blog">
          <div class="container">
            <div class="row d-flex">
              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a href="single.html" class="block-20" style="background-image: url('/web/images/image_1.jpg');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h3 class="heading"><a href="single.html">Casa de Dos Plantas - Madrid</a></h3>
                    <p>Hermosa casa de dos plantas, cuatro baños, tres habitaciones, perfecta para el invierno.</p>
                    <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0 mr-2"><a href="{{ route('more') }}" class="btn btn-secondary">Ver Más <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="mb-0"><a href="{{ route('my.services') }}" class="btn btn-primary">Servicios <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">Propia</a>

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
                      <p class="mb-0 mr-2"><a href="{{ route('more') }}" class="btn btn-secondary">Ver Más <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="mb-0"><a href="{{ route('my.services') }}" class="btn btn-primary">Servicios <span class="ion-ios-arrow-round-forward"></span></a></p>
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
                      <p class="mb-0 mr-2"><a href="{{ route('more') }}" class="btn btn-secondary">Ver Más <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="mb-0"><a href="{{ route('my.services') }}" class="btn btn-primary">Servicios <span class="ion-ios-arrow-round-forward"></span></a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">Alquilada</a>

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