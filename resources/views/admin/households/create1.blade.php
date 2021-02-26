@extends('layouts.admin')

@section('title', 'Registrar Vivienda')

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
								<li class="breadcrumb-item active"><a href="javascript:void(0);">Datos Basicos</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Companias</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Estado de la vivienda</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Fotos</a></li>
							</ol>
						</nav>
					</div> 

					<div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
						<h4>PASO 1: INGRESE LA INFORMACION BASICA DE LA VIVIENDA
						</h4>
					</div> 
				</div>
			</div>
			<div class="widget-content widget-content-area">
				<div class="col-12">

					@include('admin.partials.errors')

					<p>Por favor rellene cada uno de los datos correspondientes</p>

					<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
					<form action="{{route('viviendas.store')}}"  method="POST" class="form" id="formHousehold1" enctype="multipart/form-data">
						@csrf
						<div class="row">

							<div class="form-group col-lg-12 col-md-12 col-12">
								<div class="row">
									<div class="form-group col-lg-12 col-md-12 col-12">
										<label class="col-form-label">Comentarios acerca de la vivienda<b class="text-danger">*</b></label>
										<textarea class="form-control" name="description" required=""></textarea>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Agente de Contrato<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="contract_agent" required placeholder="Introduzca un agente de contrato" >
									</div>
									{{-- <div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Provincia<b class="text-danger">*</b></label>
										<select class="form-control" name="province_id">
											<option>Seleccione una opcion</option>
										</select>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Poblacion<b class="text-danger">*</b></label>
										<select class="form-control" name="city_id">
											<option>Seleccione una opcion</option>
										</select>
									</div> --}}
									<div class="form-group col-lg-12 col-md-12 col-12">
										<label class="col-form-label">Direccion<b class="text-danger">*</b></label>
										<textarea class="form-control" name="address" required=""></textarea>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Titulo<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="title" required placeholder="Introduzca el titulo de la vivienda" >
									</div>
									<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Categoria<b class="text-danger">*</b></label>
										<select class="form-control" name="category_id">
											<option>Seleccione una opcion</option>
											@foreach($category as $c)
											<option value="{{$c->id}}">{{$c->name}}</option>
											@endforeach
										</select>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Metros Cuadrados Vivienda<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="square_meter_h" required placeholder="Introduzca los metros cuadrados" >
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Posee Piscina?<b class="text-danger">*</b></label>
										<select class="form-control" id="pool">
											<option value="0">Seleccione una opcion</option>
											<option value="Si">Si</option>
											<option value="No">No</option>
										</select>
									</div>
									<div  class="form-group col-lg-4 col-md-4 col-12 pool2">
										<label class="col-form-label">Metros Cuadrado de la Piscina<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="square_meter_p" required placeholder="Introduzca los metros cuadrados" >
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12 pool2">
										<label class="col-form-label">Tipo de piscina<b class="text-danger">*</b></label>
										<select class="form-control" name="pool_id">
											<option>Seleccione una opcion</option>
											@foreach($pool as $p)
											<option value="{{$p->id}}">{{$p->name}}</option>
											@endforeach
										</select>
									</div>
									
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Garage<b class="text-danger">*</b></label>
										<select id="garage" class="form-control" name="">
											<option value="0">Seleccione una opcion</option>
											<option value="Si">Si</option>
											<option value="No">No</option>
										</select>
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12 garage2">
										<label class="col-form-label">Numero de Plaza<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="seat_number" required placeholder="Introduzca el numero de plaza" >
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Referencia Macro Llaves<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="reference_keys" required placeholder="Introduzca una referencia" >
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Numero de llaves<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="number_keys" required placeholder="Introduzca el numero de llaves" >
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Administrador de la urbanizacion<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="administrator_name" required placeholder="Introduzca el nombre del administrador" >
									</div>
									<div class="form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Telefono<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="administrator_phone" required placeholder="Introduzca el telefono del administrador" >
									</div>
									
								</div> 
							</div>




							<div class="form-group col-12">
								<div class="btn-group" role="group">
									<button type="submit" class="btn btn-primary" action="admin">Guardar</button>
									<a href="{{ route('viviendas.index') }}" class="btn btn-secondary">Volver</a>
								</div>
							</div> 

							
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