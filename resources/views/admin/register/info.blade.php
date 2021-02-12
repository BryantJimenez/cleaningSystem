@extends('layouts.admin')

@section('title', 'Ingrese los datos basicos de la vivienda')

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
								<li class="breadcrumb-item active"><a href="javascript:void(0);">Datos de Vivienda</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Companias</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Estado de la vivienda</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Fotos</a></li>
							</ol>
						</nav>
					</div> 

					<div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
						<h4>PASO 3: INGRESE LA INFORMACION BASICA DE LA VIVIENDA
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
									<div class="form-group col-lg-12 col-md-12 col-12">
										<label class="col-form-label">Comentarios<b class="text-danger">*</b></label>
										<textarea class="form-control" name="" required=""></textarea>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Agente de Contrato<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" >
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Provincia<b class="text-danger">*</b></label>
										<select class="form-control" name="">
											<option>Seleccione una opcion</option>
										</select>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Poblacion<b class="text-danger">*</b></label>
										<select class="form-control" name="">
											<option>Seleccione una opcion</option>
										</select>
									</div>
									<div class="form-group col-lg-12 col-md-12 col-12">
										<label class="col-form-label">Direccion<b class="text-danger">*</b></label>
										<textarea class="form-control" name="" required=""></textarea>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Metros Cuadrados Vivienda<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" >
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Posee Piscina?<b class="text-danger">*</b></label>
										<select class="form-control" name="">
											<option>Seleccione una opcion</option>
										</select>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Metros Cuadrado de la Piscina<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" >
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Tipo de piscina<b class="text-danger">*</b></label>
										<select class="form-control" name="">
											<option>Seleccione una opcion</option>
										</select>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Garage<b class="text-danger">*</b></label>
										<select class="form-control" name="">
											<option>Seleccione una opcion</option>
										</select>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Numero de Plaza<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" >
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Referencia Macro Llaves<b class="text-danger">*</b></label>
										<select class="form-control" name="">
											<option>Seleccione una opcion</option>
										</select>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Numero de llaves<b class="text-danger">*</b></label>
										<select class="form-control" name="">
											<option>Seleccione una opcion</option>
										</select>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Administrador de la urbanizacion<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" >
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Telefono<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" >
									</div>
									{{-- <div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Nombre<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" >
									</div> --}}
									
								</div> 
							</div>




							{{-- <div class="form-group col-12">
								<div class="btn-group" role="group">
									<button type="submit" class="btn btn-primary" action="admin">Guardar</button>
									<a href="{{ route('bancos.index') }}" class="btn btn-secondary">Volver</a>
								</div>
							</div> --}} 

							<p class="lead mt-5">
							<a class="btn btn-success" href="{{route('companias')}}" role="button">Siguiente -></a>
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