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
        <h1 class="mb-3 bread">Mis Servicios</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Mis Servicios</a></span> </p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center order-lg-last ftco-animate">
        <h2 class="mb-3">Tus Servicios</h2>
        <p>Visualiza todos los servicios encargados por ti a cada una de tus viviendas</p>

        <section class="ftco-section" data-section="services">
          <div class="container">
            <div class="row d-flex">


              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a class="block-20" style="background-image: url('{{ asset('/admins/img/services/supervision.jpg') }}');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h3 class="heading"><a>Supervisión</a></h3>
                    <p>Hacemos una visita periódica para supervisar cualquier eventualidad</p>
                    <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="{{route('my.purchases', ['n' => '3'])}}" class="btn btn-primary">Ver Mas</a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">700 €</a>

                      </p>
                    </div>
                  </div>
                </div>
              </div>

               <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a class="block-20" style="background-image: url('{{ asset('/admins/img/services/cuidado.jpg') }}');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h3 class="heading"><a>Cuidamos de tu Casa</a></h3>
                    <p>Gestión y Tramitación de averías, puertas de acceso, vallado, terrazas, toldos, retiradas de escombros, etc.</p>
                    <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="{{route('my.purchases', ['n' => '3'])}}" class="btn btn-primary">Ver Mas</a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">700 €</a>

                      </p>
                    </div>
                  </div>
                </div>
              </div>

               <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a class="block-20" style="background-image: url('{{ asset('/admins/img/services/key.jpg') }}');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h3 class="heading"><a>Key Keepers</a></h3>
                    <p>Tenemos unas llaves de tu casa por todos esos imprevistos que puedan suceder cuando no estas o quizás  se te hayan olvidado</p>
                    <div class="d-flex align-items-center mt-4 meta">
                      <p class="mb-0"><a href="{{route('my.purchases', ['n' => '3'])}}" class="btn btn-primary">Ver Mas</a></p>
                      <p class="ml-auto mb-0">
                        <a href="#" class="mr-2">700 €</a>

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

