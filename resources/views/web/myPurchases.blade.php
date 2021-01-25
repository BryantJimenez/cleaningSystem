@extends('layouts.web')

@section('title', 'Cuidamos Tu Casa')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('/web/images/purchases.jpeg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h1 class="mb-3 bread">Mis Pagos</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="">Mis Pagos </a></span></p>
      </div>
    </div>
  </div>
</section>

@if($n==1)
<section class="ftco-section contact-section ftco-no-pb mb-5">
  <div class="container">
    <div class="about-author d-flex p-4 bg-light">
      <div class="bio mr-5">
        <img src="/admins/img/households/400x300.jpg" alt="Image placeholder" class="img-fluid mb-4">
      </div>
      <div class="row">
        <h3 class="col-lg-12">Compra de Vivienda</h3>
        <h4 class="col-lg-12">Fecha</h4>
        <h5 sty class="col-lg-3">Titulo</h5> <h5 class="col-lg-3">Categoria</h5> <h5 class="col-lg-3">Transaccion</h5> <h5 class="col-lg-3">Total</h5>

        <p class="col-lg-3">...</p> <p class="col-lg-3">...</p> <p class="col-lg-3">...</p> <p class="col-lg-3">...</p>

      </div>
    </div>
  </div>
</section>
@elseif($n==2)
<section class="ftco-section contact-section ftco-no-pb mb-5">
  <div class="container">
    <div class="about-author d-flex p-4 bg-light">
      <div class="bio mr-5">
        <img src="/admins/img/households/400x300.jpg" alt="Image placeholder" class="img-fluid mb-4">
      </div>
      <div class="row">
        <h3 class="col-lg-12">Alquiler de Vivienda</h3>
        <h4 class="col-lg-12">Tipo</h4>
        <h5 sty class="col-lg-3">N Meses</h5> <h5 class="col-lg-3">Transaccion</h5> <h5 class="col-lg-3">Estado</h5> <h5 class="col-lg-3">Total</h5>

        <p class="col-lg-3">...</p> <p class="col-lg-3">...</p> <p class="col-lg-3">...</p> <p class="col-lg-3">...</p>

      </div>
    </div>
  </div>
</section>
@else
<section class="ftco-section contact-section ftco-no-pb mb-5">
  <div class="container">
    <div class="about-author d-flex p-4 bg-light">
      <div class="bio mr-5">
        <img src="/admins/img/households/400x300.jpg" alt="Image placeholder" class="img-fluid mb-4">
      </div>
      <div class="row">
        <h3 class="col-lg-12">Compra de Servicio</h3>
        <h4 class="col-lg-12">Tipo de Servicio</h4>
        <h4 class="col-lg-12">Fecha Inicial/ Fecha de Cierre</h4>
        <h5 sty class="col-lg-3">Compania</h5> <h5 class="col-lg-3">N de Empleados</h5> <h5 class="col-lg-3">Presupuesto</h5> <h5 class="col-lg-3">Total</h5>

        <p class="col-lg-3">...</p> <p class="col-lg-3">...</p> <p class="col-lg-3">...</p> <p class="col-lg-3">...</p>
        
      </div>
    </div>
  </div>
</section>
@endif


@endsection

