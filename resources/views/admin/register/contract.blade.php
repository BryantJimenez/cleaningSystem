@extends('layouts.admin')

@section('title', 'Elegir un Contrato')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/dropify/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/css/elements/breadcrumb.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/css/plugins.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/vendor/pricing-table/css/component.css') }}">
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
								<li class="breadcrumb-item active"><a href="javascript:void(0);">Contrato</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Pago de Contrato</a></li>
							</ol>
						</nav>
					</div> 

					<div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
						<h4>PASO 2: ELEGIR UN CONTRATO</h4>	
					</div> 

				</div>
			</div>
			<div class="widget-content widget-content-area">

				
				<div class="col-12">

					@include('admin.partials.errors')

					<p>Por favor seleccione el contrato que mas le favorezca</p>
					
					
					<div id="pricingWrapper" class="row">
						@foreach($contracts as $contract)
						<div class="col-md-6 col-lg-4">
							<div class="card stacked mt-5">
								<div class="card-header pt-0">
									<span class="card-price">{{$contract->price}} €</span>
									<h3 class="card-title mt-3 mb-1">{{$contract->name}}</h3>
								</div>
								<div class="card-body">
									{{$contract->description}}

									<form action="{{route('pago')}}" method="POST">
										@csrf
										<input type="hidden" name="slug" value="{{$contract->slug}}">
									<button type="submit" class="btn btn-block btn-primary mt-3">Adquirir</button>
									</form>
								</div>
							</div>
						</div>
						@endforeach

						

						

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