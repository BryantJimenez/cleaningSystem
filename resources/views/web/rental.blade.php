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
        <h1 class="mb-3 bread">Alquiler de Vivienda</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="">Vivienda <i class="ion-ios-arrow-forward"></i></a></span> <span>Alquiler de Vivienda <i class="ion-ios-arrow-forward"></i></span></p>
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
            <span class="subheading mb-5">Vivienda</span>

            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th scope="col">Foto Princial</th>
                  <th scope="col">Categoría</th>
                  <th scope="col">Ciudad</th>
                  <th scope="col">Ubicacion</th>
                  <th scope="col">Costo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img style="width: 150px; height: 150px;" src="/web/images/image_6.jpg"></td>
                  <td>Casa de Playa</td>
                  <td>Barcelona</td>
                  <td>Norte con edificio Maiquetía</td>
                  <td>500$</td>
                 
                </tr>
                
                <tr>
                  <td colspan="4" class="text-right"><strong>Total</strong></td>
                  <td><strong>500$</strong></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </section>
  <h1 class="text-center">Alquiler de Vivienda</h1>
  <section class="ftco-section contact-section ftco-no-pb mb-5">
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
                <label class="col-form-label">N° Meses</label>
                <input type="number" class="form-control" value="2">
              </div>
              <div class="form-group col-md-6">
                <label class="col-form-label">Método de Pago</label>
               <select class="form-control">
                 <option value="">Seleccione un método de pago</option>
               </select>
              </div>
              <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th scope="col">Mes</th>
                  <th scope="col">Precio</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Enero</td>
                  <td>500$</td>
                </tr>
                <tr>
                  <td>Febrero</td>
                  <td>500$</td>
                </tr>
                <tr>
                  <td colspan="1" class="text-right"><strong>Total</strong></td>
                  <td><strong>1000$</strong></td>
                </tr>
              </tbody>
            </table>
            </div>
            <div class="text-center mt-5"><a ><button class="text-center btn btn-primary py-3 px-5 mr-5">Comprar</button></a> <a href="{{ route('home') }}"><button class="text-center btn btn-danger py-3 px-5 ">Cancelar</button></a></div>

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