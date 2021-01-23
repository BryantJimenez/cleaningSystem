@extends('layouts.admin')

@section('title', 'Editar Banco')

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
						<h4>Editar Banco</h4>
					</div>                 
				</div>
			</div>
			<div class="widget-content widget-content-area">

				<div class="row">
					<div class="col-12">

						@include('admin.partials.errors')

						<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
						<form action="{{ route('bancos.update', ['slug' => $bank->slug]) }}" method="POST" class="form" id="formbanco" enctype="multipart/form-data">
							@csrf
							@method('PUT')
							<div class="row">

								<div class="form-group col-lg-12 col-md-12 col-12">
									<div class="row">
										<div class="form-group col-lg-6 col-md-6 col-12">
											<label class="col-form-label">Nombre<b class="text-danger">*</b></label>
											<input class="form-control" type="text" name="name" required placeholder="Introduzca un nombre" value="{{ $bank->name }}">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-12">
											<label class="col-form-label">Código<b class="text-danger">*</b></label>
											<input class="form-control" type="text" name="code" required placeholder="Introduzca un código" value="{{ $bank->code }}">
										</div>
									</div> 
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