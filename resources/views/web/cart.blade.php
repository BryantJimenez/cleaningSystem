@extends('layouts.web')

@section('title', 'Cuidamos Tu Casa')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/dropify/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
@endsection


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('web/images/cart.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h1 class="mb-3 bread">Compra de Servicios</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="">Servicios <i class="ion-ios-arrow-forward"></i></a></span> <span>Selección de Servicios <i class="ion-ios-arrow-forward"></i></span></p>
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
            <span class="subheading mb-5">Servicios Seleccionados</span>

            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Servicio</th>
                  <th scope="col">Costo</th>
                  <th scope="col">Acción</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Key Keeper</td>
                  <td>50$</td>
                  <td><button class="text-center btn btn-danger"><div class="icon-quote"><span class="icon-close"></span></div></button></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Mantenimiento de piscina</td>
                  <td>25$</td>
                  <td><button class="text-center btn btn-danger"><div class="icon-quote"><span class="icon-close"></span></div></button></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Limpieza</td>
                  <td>25$</td>
                  <td><button class="text-center btn btn-danger"><div class="icon-quote"><span class="icon-close"></span></div></button></td>
                </tr>
                <tr>
                  <td colspan="2" class="text-right"><strong>Total</strong></td>
                  <td><strong>100$</strong></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </section>
  <h1 class="text-center">Pago de Servicios</h1>
  <section class="ftco-section contact-section ftco-no-pb">
    <div class="container">
      <div class="row no-gutters block-9">
        <div class="col-md-12 order-md-last d-flex">

          <form action="#" class="bg-light p-5 contact-form">
            <p>Campos obligatorios (<b class="text-danger">*</b>)</p>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="col-form-label">Nombre</label>
                <input type="text" class="form-control" disabled placeholder="Nombre">
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">Apellido</label>
                <input type="text" class="form-control" disabled placeholder="Apellido">
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">DNI</label>
                <input type="text" class="form-control" disabled placeholder="DNI">
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">Teléfono Móvil</label>
                <input type="text" class="form-control" disabled placeholder="Teléfono Móvil">
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">Ciudad</label>
                <input type="text" class="form-control" disabled placeholder="Ciudad">
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">Total</label>
                <input type="text" class="form-control" disabled placeholder="100$">
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">Método de Pago</label>
               <select class="form-control">
                 <option value="">Seleccione un método de pago</option>
               </select>
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">Fecha de Inicio</label>
                <input type="date" class="form-control" disabled placeholder="100$">
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">Fecha de Finalización</label>
                <input type="date" class="form-control" disabled placeholder="100$">
              </div>

            </div>
            <div class="text-center mt-5"><a href="{{ route('register') }}"><button class="text-center btn btn-primary py-3 px-5 mr-5">Comprar</button></a> <a href="{{ route('login') }}"><button class="text-center btn btn-danger py-3 px-5 ">Cancelar</button></a></div>

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