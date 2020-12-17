@extends('layouts.web')

@section('title', 'Cuidamos Tu Casa')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/dropify/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
@endsection


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('web/images/portada.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay">
  </div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h1 class="mb-3 bread">Registro</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Registro de Clientes</a></span></span></p>
    </div>
</div>
</div>
</section>


<section class="ftco-section">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 order-lg-last ftco-animate">
            <h2 class="mb-3 text-center">¿Te interesa formar parte de nuestra comunidad?</h2>
            <p class="text-center"> Si es asi, podras visualizar y gozar de nuestros servicios, asi como tambien podras vender adquirir o alquilar la vivienda que necesites. Por favor complete los siguientes datos para proseguir al siguiente paso</p>


        </div>
    </div>
</div>

<section class="ftco-section contact-section ftco-no-pb">
    <div class="container">
        <div class="row no-gutters block-9">
          <div class="col-md-12 order-md-last d-flex">

            <form action="#" class="bg-light p-5 contact-form">
                <p>Campos obligatorios (<b class="text-danger">*</b>)</p>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Foto (Opcional)</label>
                        <input type="file" name="photo" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Nombre<b class="text-danger">*</b></label>
                        <input type="text" class="form-control" placeholder="Introduzca su nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Apellido<b class="text-danger">*</b></label>
                        <input type="text" class="form-control" placeholder="Introduzca su apellido">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">DNI<b class="text-danger">*</b></label>
                        <input type="text" class="form-control" placeholder="Introduzca su dni">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Ciudad<b class="text-danger">*</b></label>
                        <select class="form-control">
                            <option value="">Seleccione su Ciudad</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Provincia<b class="text-danger">*</b></label>
                        <select class="form-control">
                            <option value="">Seleccione su provincia</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Teléfono Fijo<b class="text-danger">*</b></label>
                        <input type="text" class="form-control" placeholder="Introduzca su teléfono fijo">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Teléfono Móvil<b class="text-danger">*</b></label>
                        <input type="text" class="form-control" placeholder="Introduzca su teléfono móvil">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">Correo<b class="text-danger">*</b></label>
                        <input type="email" class="form-control" placeholder="Correo">
                    </div>
                     <div class="form-group col-md-6">
                        <label class="col-form-label">Dirección Facturación<b class="text-danger">*</b></label>
                        <input type="text" class="form-control" placeholder="Introduzca su dirección">
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <label class="col-form-label">Contraseña<b class="text-danger">*</b></label>
                        <input class="form-control" type="password" name="password" required placeholder="********" id="password">
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-12">
                        <label class="col-form-label">Confirmar Contraseña<b class="text-danger">*</b></label>
                        <input class="form-control" type="password" name="password_confirmation" required placeholder="********">
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Enviar" class="btn btn-secondary py-3 px-5">
                </div>

            </form>
        </div>

    </div>
</div>
</section>

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