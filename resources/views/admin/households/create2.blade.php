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
								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Datos Basicos</a>
								</li>
								<li class="breadcrumb-item active"><a href="javascript:void(0);">Companias</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Estado de la vivienda</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Fotos</a></li>
							</ol>
						</nav>
					</div> 

					<div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
						<h4>PASO 2: INGRESE LAS COMPANIAS ASOCIADAS A LA VIVIENDA
						</h4>
					</div> 
				</div>
			</div>
			<div class="widget-content widget-content-area">
				<div class="col-12">

					@include('admin.partials.errors')

					<p>Por favor rellene cada uno de los datos correspondientes</p>

					<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
					<form action="{{route('viviendas.store2')}}" method="POST" class="form" id="formbanco" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="form-group col-lg-12 col-md-12 col-12">
								<div class="row">

									<div class="form-group col-lg-6 col-md-6 col-12">
										<label class="col-form-label">Compania de Alarmas<b class="text-danger">*</b></label>
										<select class="form-control" name="alarm_company_id">
											<option>Seleccione una opcion</option>
											@foreach($alarm as $a)
											<option value="{{ $a->id}}">{{ $a->name}}</option>
											@endforeach
											
										</select>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-12">
										<label class="col-form-label">Compania Electrica<b class="text-danger">*</b></label>
										<select class="form-control" name="electric_company_id">
											<option>Seleccione una opcion</option>
											@foreach($electric as $e)
											<option value="{{ $e->id}}">{{ $e->name}}</option>
											@endforeach
											
										</select>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-12">
										<label class="col-form-label">Compania de Agua<b class="text-danger">*</b></label>
										<select class="form-control" name="water_company_id">
											<option>Seleccione una opcion</option>
											@foreach($water as $w)
											<option value="{{ $w->id}}">{{ $w->name}}</option>
											@endforeach
											
										</select>
									</div>
									<div class="form-group col-lg-6 col-md-6 col-12">
										<label class="col-form-label">Compania de Internet/Telefono<b class="text-danger">*</b></label>
										<select class="form-control" name="phone_company_id">
											<option>Seleccione una opcion</option>
											@foreach($internet as $i)
											<option value="{{ $i->id}}">{{ $i->name}}</option>
											@endforeach
											
										</select>
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