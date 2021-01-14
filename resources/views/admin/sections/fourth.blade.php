@extends('layouts.admin')

@section('title', 'Editar Seccion')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/dropify/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
@endsection

@section('content')

<div class="row layout-top-spacing">

	<div class="col-12 layout-spacing">
		<div class="statbox widget box box-shadow">
			<div class="widget-header">
				<div class="row">
					<div class="col-xl-12 col-md-12 col-sm-12 col-12">
						<h4>Editar Sección</h4>
					</div>                 
				</div>
			</div>
			<div class="widget-content widget-content-area">

				<div class="row">
					<div class="col-12">

						@include('admin.partials.errors')

						<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
						<form action="{{ route('secciones.update', ['id' => $section->id]) }}" method="POST" class="form" id="formFourth" enctype="multipart/form-data">
							@csrf
							@method('PUT')
							<div class="row">

								<div class="form-group col-lg-12 col-md-12 col-12">
									<div class="row">
										<div class="form-group col-lg-4 col-md-4 col-12">
											<label class="col-form-label">Telefono 1<b class="text-danger">*</b></label>
											<input class="form-control" type="text" name="phone_1" required placeholder="Introduzca un telefono" value="{{ $section->phone_1 }}">
										</div>
										<div class="form-group col-lg-4 col-md-4 col-12">
											<label class="col-form-label">Telefono 2<b class="text-danger">*</b></label>
											<input class="form-control" type="text" name="phone_2" required placeholder="Introduzca un telefono" value="{{ $section->phone_2 }}">
										</div>
										<div class="form-group col-lg-4 col-md-4 col-12">
											<label class="col-form-label">Telefono 3<b class="text-danger">*</b></label>
											<input class="form-control" type="text" name="phone_3" required placeholder="Introduzca un telefono" value="{{ $section->phone_3 }}">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-12">
											<label class="col-form-label">Email<b class="text-danger">*</b></label>
											<input class="form-control" type="email" name="email" required placeholder="Introduzca un email" value="{{ $section->email }}">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-12">
											<label class="col-form-label">Dirección<b class="text-danger">*</b></label>
											<input class="form-control" type="text" name="address" required placeholder="Introduzca un telefono" value="{{ $section->address }}">
										</div>
									</div> 
								</div>

								

								
								<div class="form-group col-12">
									<div class="btn-group" role="group">
										<button type="submit" class="btn btn-primary" action="admin">Guardar</button>
										<a href="{{ route('secciones.index') }}" class="btn btn-secondary">Volver</a>
									</div>
								</div> 
							</div>
						</form>
					</div>                                        
				</div>

			</div>
		</div>
	</div>

</div>

@endsection

@section('scripts')
<script src="{{ asset('/admins/vendor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/admins/vendor/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/jquery.validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/additional-methods.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/messages_es.js') }}"></script>
<script src="{{ asset('/admins/js/validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
@endsection