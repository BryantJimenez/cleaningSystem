@extends('layouts.admin')

@section('title', 'Ingrese el estado de la vivienda')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/dropify/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/css/elements/breadcrumb.css') }}">
@endsection

@section('content')

<div class="row layout-top-spacing">

	<div class="col-12 layout-spacing">
		<div class="statbox widget box box-shadow">
			<div class="widget-header">
				<div class="row">
					<div class="col-xl-12 col-md-12 col-sm-12 col-12 mt-3 ml-3">
						<nav class="breadcrumb-two" aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">Datos Personales</a></li>
								
								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Contrato</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Datos de vivienda</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Companias</a></li>
								<li class="breadcrumb-item active"><a href="javascript:void(0);">Estado de la Vivienda</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Fotos</a></li>
							</ol>
						</nav>
					</div> 

					<div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
						<h4>PASO 5: INGRESE ESTADO DE LA VIVIENDA
						</h4>
					</div> 
				</div>
			</div>
			<div class="widget-content widget-content-area">
				<div class="col-12">

					@include('admin.partials.errors')

					<p>Por favor rellene cada uno de los datos correspondientes</p>

					<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
					<form  method="POST" class="form" id="formbanco" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="row">

							<div class="form-group col-lg-12 col-md-12 col-12">
								<div class="row">
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Esta en Venta?<b class="text-danger">*</b></label>
										<select class="form-control" name="">
											<option>Seleccione una opcion</option>
										</select>
										
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Precio de venta<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" >
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Esta en alquiler?<b class="text-danger">*</b></label>
										<select class="form-control" name="">
											<option>Seleccione una opcion</option>
										</select>
									</div>
									
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Precio de alquiler por mes regular<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" >
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Precio de alquiler por dia<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" >
									</div>

									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Precio de alquiler por año<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" >
									</div>

									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Precio de alquiler por mes de enero<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" >
									</div>

									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Precio de alquiler por mes de Julio<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" >
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Precio de alquiler por mes de Agosto<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" >
									</div>




									
									




							{{-- <div class="form-group col-12">
								<div class="btn-group" role="group">
									<button type="submit" class="btn btn-primary" action="admin">Guardar</button>
									<a href="{{ route('bancos.index') }}" class="btn btn-secondary">Volver</a>
								</div>
							</div>  --}}

							<br><p class="lead mt-5">
								<a class="btn btn-success" href="{{route('fotos')}}" role="button">Siguiente -></a>
							</p>
						</div>
					</form>



				</div>                                        
			</div>
		</div>
	</div>

</div>

@endsection

@section('scripts')
<script src="{{ asset('/admins/vendor/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/jquery.validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/additional-methods.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/messages_es.js') }}"></script>
<script src="{{ asset('/admins/js/validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
@endsection