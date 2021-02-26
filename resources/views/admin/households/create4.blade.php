 @extends('layouts.admin')

 @section('title', 'Ingrese fotos de la vivienda')

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
 								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Datos Basicos</a></li>
 								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Companias</a></li>
 								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Estado de la Vivienda</a></li>
 								<li class="breadcrumb-item active"><a href="javascript:void(0);">Fotos</a></li>
 								
 							</ol>
 						</nav>
 					</div> 

 					<div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
 						<h4>PASO 4: INGRESE FOTOS DE LA VIVIENDA
 						</h4>
 					</div> 
 				</div>
 			</div>
 			<div class="widget-content widget-content-area">
 				<div class="col-12">

 					@include('admin.partials.errors')

 					<p>Por favor rellene cada uno de los datos correspondientes</p>

 					<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
 					<form  method="POST" action="{{route('viviendas.store4')}}" class="form" id="formbanco" enctype="multipart/form-data">
 						@csrf
 						<div class="row">

 							<div class="form-group col-lg-12 col-md-12 col-12" id="click">
 								<div class="row">
 									<div class="form-group col-lg-5 col-md-5 col-12">
 										<label class="col-form-label">Foto</label>
 										<input type="file" name="photo[]" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />
 									</div>

 									<div class="form-group col-lg-6 col-md-6 col-12" id="click">
 										<div class="row" >
 											<div class="form-group col-lg-12 col-md-12 col-12">
 												<label class="col-form-label">Descripcion<b class="text-danger">*</b></label>
 												<textarea class="form-control" name="description[]">Introduzca una descripcion</textarea>
 											</div>
 											<div class="form-group col-lg-12 col-md-12 col-12">
 												<button class="btn-primary click" >Agregar Otra Foto</button>
 											</div>
 										</div> 
 									</div>
 								</div>
 							</div>

 							<div class="form-group col-lg-12 col-md-12 col-12" id="contenido">
 							</div>
 							<div class="form-group col-12">
 								<div class="btn-group" role="group">
 									<button type="submit" class="btn btn-primary" action="admin">Guardar</button>
 									<a href="{{ route('bancos.index') }}" class="btn btn-secondary">Volver</a>
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
 <script type="text/javascript">

 	$("#click").on('click', '.click', function(event) {
 		event.preventDefault();


 		$("#contenido").append('<div class="row">'+
 			'<div class="form-group col-lg-5 col-md-5 col-12">'+
 			'<label class="col-form-label">Foto</label>'+
 			'<input type="file" name="photo[]" accept="image/*" id="input-file-now" class="dropify" data-height="125" data-max-file-size="20M" data-allowed-file-extensions="jpg png jpeg web3" />'+
 			'</div>'+

 			'<div class="form-group col-lg-6 col-md-6 col-12">'+
 			'<div class="row" >'+
 			'<div class="form-group col-lg-12 col-md-12 col-12">'+
 			'<label class="col-form-label">Description<b class="text-danger">*</b></label>'+
 			'<textarea class="form-control" name="description[]">Introduzca una descripcion</textarea>'+
 			'</div>'+
 			'</div> '+
 			'</div>'+
 			'</div>') 


 	});
 </script>
 @endsection