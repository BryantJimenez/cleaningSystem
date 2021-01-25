@extends('layouts.web')

@section('title', 'Cuidamos Tu Casa')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/dropify/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
@endsection


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('web/images/payment.jpg');" data-stellar-background-ratio="0.5">
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


  
  <section class="ftco-section contact-section ftco-no-pb mb-5">
    <div class="container">
      <div class="row no-gutters block-9">
        <div class="col-md-12 order-md-last d-flex">
          <form action="#" class="bg-light p-5 contact-form">
            <h1 class="text-center">Mis Pagos</h1>
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th scope="col">Compra</th>
                  <th scope="col">Tipo de Pago</th>
                  <th scope="col">Transaccion</th>
                  <th scope="col">Total</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Mas</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img style="width: 150px; height: 150px;" src="/admins/img/households/400x300.jpg" title="Compra"></td>
                  <td class="pt-5">Compra de Vivienda</td>
                  <td class="pt-5">PayPal</td>
                  <td class="pt-5">300.000 €</td>
                  <td class="pt-5">25-10-2020</td>
                  <td class="pt-5"><p class="mb-0 mr-2 btn btn-primary">Aprobado</p></td>
                  <td class="pt-5"><p ><a href="{{route('my.purchases', ['n' => '1'])}}" class="mb-0 mr-2 btn btn-success">Ver Mas</a></p>
                  </td>
                </tr>
                <tr>
                  <td><img style="width: 150px; height: 150px;" src="/admins/img/households/400x300.jpg" title="Compra"></td>
                  <td class="pt-5">Alquiler de Vivienda</td>
                  <td class="pt-5">PayPal</td>
                  <td class="pt-5">300.000 €</td>
                  <td class="pt-5">25-10-2020</td>
                  <td class="pt-5"> <p class="mb-0 mr-2 btn btn-warning">En Espera</p></td>
                  <td class="pt-5"><p ><a class="mb-0 mr-2 btn btn-success" href="{{route('my.purchases', ['n' => '2'])}}">Ver Mas</a></p></td>
                </tr>
                 <tr>
                  <td><img style="width: 150px; height: 150px;" src="/admins/img/households/400x300.jpg" title="Compra"></td>
                  <td class="pt-5">Compra de Servicios</td>
                  <td class="pt-5">PayPal</td>
                  <td class="pt-5">300.000 €</td>
                  <td class="pt-5">25-10-2020</td>
                  <td class="pt-5"><p class="mb-0 mr-2 btn btn-danger">Denegado</p></td>
                  <td class="pt-5"><p ><a href="{{route('my.purchases', ['n' => '3'])}}" class="mb-0 mr-2 btn btn-success">Ver Mas</a></p></td>
                </tr>

              </tbody>
            </table>

          </form>
        </div>

      </div>
    </div>
  </section>


  @endsection

  @section('scripts')
  <script src="{{ asset('/admins/vendor/dropify/dropify.min.js') }}"></script>
  <script src="{{ asset('/admins/vendor/validate/jquery.validate.js') }}"></script>
  <script src="{{ asset('/admins/vendor/validate/additional-methods.js') }}"></script>
  <script src="{{ asset('/admins/vendor/validate/messages_es.js') }}"></script>
  <script src="{{ asset('/admins/js/validate.js') }}"></script>
  <script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
  @endsection