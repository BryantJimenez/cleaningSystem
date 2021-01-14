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

              @foreach($services as $service)
              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a class="block-20" style="background-image: url('{{ asset('/admins/img/services/'.$service->photo) }}');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h3 class="heading"><a>{{$service->name}}</a></h3>
                    <p>{{$service->description}}</p>
                    <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="#" class="btn btn-primary">Comprar <span class="ion-ios-cart"></span></a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">{{$service->square_meter}} €</a>

                      </p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

              

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