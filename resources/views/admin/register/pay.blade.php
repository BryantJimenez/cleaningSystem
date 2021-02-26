@extends('layouts.admin')

@section('title', 'Ingrese los datos basicos de la vivienda')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/dropify/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/css/elements/breadcrumb.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/css/dashboard/dash_1.css') }}">
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
								<li class="breadcrumb-item active"><a href="javascript:void(0);">Pago de Contrato</a></li>
							</ol>
						</nav>
					</div> 

					<div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
						<h4>PASO 3: REALICE EL PAGO CORRESPONDIENTE AL CONTRATO
						</h4>
					</div> 
				</div>
			</div>
			<div class="widget-content widget-content-area">
				<div class="col-12">

					@include('admin.partials.errors')

					<p>Por favor rellene cada uno de los datos correspondientes</p>

					<p>Campos obligatorios (<b class="text-danger">*</b>)</p>
					<form action="{{route('pagos.store.contratos')}}"  method="POST" class="form" id="formbanco" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="form-group col-lg-12 col-md-12 col-12">
								<div class="row">
									
									<div class="form-group col-lg-6 col-md-6 col-12">
										<label class="col-form-label">Contrato<b class="text-danger">*</b></label>
										<input class="form-control" type="text" disabled="" value="{{$name}}" >
									</div>
									<div class="form-group col-lg-6 col-md-6 col-12">
										<label class="col-form-label">Precio<b class="text-danger">*</b></label>
										<div class="input-group mb-4">
											<input type="text" readonly="" name="total" value="{{$price}}" class="form-control" aria-label="Amount (to the nearest dollar)">
											<div class="input-group-append">
												<span class="input-group-text">€</span>
											</div>
										</div>
									</div>
									<input type="hidden" name="contract_id" value="{{$id}}">
									<div class="form-group col-lg-6 col-md-6 col-12">
										<label class="col-form-label">Tipo de Pago<b class="text-danger">*</b></label>
										<select id="banco" class="form-control" name="type_pay">
											<option value="0">Seleccione una opcion</option>
											<option value="1">Transferencia</option>
											<option value="2">Tarjeta Bancaria</option>
											<option value="3">PayPal</option>
											<option value="4">Bizum</option>
										</select>
									</div>
									
									<div class="banco col-xl-8 col-lg-12 col-md-8 col-sm-12 col-12 layout-spacing" style="margin-left: 15%;">
										<div class="widget widget-table-one">
											<div class="widget-heading">
												<h5 class="">Caja Rural Central</h5>
											</div>

											<div class="widget-content">
												<div class="transactions-list">
													<div class="t-item">
														<div class="t-company-name">
															<div class="t-icon">
																<div class="icon">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
																</div>
															</div>
															<div class="t-name">
																<h4>Codificar S.L.</h4>
																<p class="meta-date">ES66 3005 0054 9122 7472 8225</p>
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
											<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
									<div class="banco form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Banco Emisor<b class="text-danger">*</b></label>
										<select class="form-control" name="issue_bank">
											<option value="0">Seleccione una opcion</option>
											@foreach($bank0 as $b)
											<option value="{{$b->id}}">{{$b->name}}</option>
											@endforeach

										</select>
									</div>
									<div class="banco form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Referencia<b class="text-danger">*</b></label>
										<input class="form-control" type="text" name="reference" required placeholder="Introduzca una referencia" >
									</div>
									<div class="banco form-group col-lg-4 col-md-4 col-12">
										<label class="col-form-label">Fecha<b class="text-danger">*</b></label>
										<input class="form-control" type="date" name="date" required placeholder="Introduzca una fecha" >
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

@endsection

@section('scripts')
<script src="{{ asset('/admins/vendor/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/jquery.validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/additional-methods.js') }}"></script>
<script src="{{ asset('/admins/vendor/validate/messages_es.js') }}"></script>
<script src="{{ asset('/admins/js/validate.js') }}"></script>
<script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
@endsection