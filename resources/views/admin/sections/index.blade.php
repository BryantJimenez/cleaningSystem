 @extends('layouts.admin')

 @section('title', 'Lista de Secciones Web')

 @section('links')
 <link href="{{ asset('/admins/vendor/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('/admins/vendor/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('/admins/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('/admins/css/widgets/modules-widgets.css') }}" rel="stylesheet" type="text/css" />

 @endsection

 @section('content')

 <div class="row sales">

 	<div class="col-12 layout-spacing">
 		<div class="statbox widget box box-shadow">
 			<div class="widget-header">
 				<div class="row">
 					<div class="col-xl-12 col-md-12 col-sm-12 col-12">
 						<h4>Secciones de La Web</h4>
 					</div>                 
 				</div>
 			</div>

 			<div class="row">
 				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
 					<div class="widget widget-account-invoice-one">
 						<div class="widget-heading">
 							<h5 class="">Primera Sección</h5>
 						</div>
 						<div class="widget-content">
 							<div class="invoice-box">
 								<div class="acc-total-info">
 									<h5>Título</h5>
 									<p class="info-detail-1">{{ $sections->title}}</p>
 								</div>
 								<div class="acc-total-info">
 									<h5>Subtítulo</h5>
 									<p class="info-detail-1">{{ $sections->subtitle}}</p>
 								</div>
 								<div class="inv-action">
 									<a href="{{ route('secciones.edit.primera', ['id' => $sections->id]) }}" class="btn btn-danger">Editar</a>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>

 				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
 					<div class="widget widget-account-invoice-one">
 						<div class="widget-heading">
 							<h5 class="">Segunda Sección</h5>
 						</div>
 						<div class="widget-content">
 							<div class="invoice-box">
 								<div class="acc-total-info">
 									<h5>Sobre Nosotros</h5>
 									<p class="info-detail-1">{!! $sections->about!!}</p>
 								</div>
 								<div class="acc-total-info">
 									<h5>Servicios</h5>
 									<p class="info-detail-1">{{ $sections->services}}</p>
 								</div>
 								<div class="inv-action">
 									<a href="{{ route('secciones.edit.segunda', ['id' => $sections->id]) }}" class="btn btn-danger">Editar</a>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>

 				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
 					<div class="widget widget-account-invoice-one">
 						<div class="widget-heading">
 							<h5 class="">Tercera Sección</h5>
 						</div>
 						<div class="widget-content">
 							<div class="invoice-box">
 								<div class="acc-total-info">
 									<h5>Opiniones</h5>
 									<div class="inv-action">
 										<a href="{{ route('opiniones.index') }}" class="btn btn-danger">Ver Más</a>
 									</div>
 								</div>
 								<div class="acc-total-info">
 									<h5>Viviendas</h5>
 									<p class="info-detail-1">{{ $sections->households}}</p>
 								</div>
 								<div class="inv-action">
 									<a href="{{ route('secciones.edit.tercera', ['id' => $sections->id]) }}" class="btn btn-danger">Editar</a>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>

 				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
 					<div class="widget widget-account-invoice-one">
 						<div class="widget-heading">
 							<h5 class="">Cuarta Sección</h5>
 						</div>
 						<div class="widget-content">
 							<div class="invoice-box">

 								<div class="acc-total-info">
 									<h5>Aviso Legal</h5>
 									<div class="inv-action">
 										<a href="{{ route('secciones.edit.legal', ['id' => $sections->id]) }}" class="btn btn-danger">Ver Más</a>
 									</div>
 								</div>

 								<div class="acc-total-info">
 									<h5>Contáctanos</h5>
 									<p class="info-detail-1">{{ $sections->contact}}</p>
 								</div>

 								<div class="inv-detail">                                        
 									<div class="info-detail-1">
 										<p>Teléfono</p>
 										<p>{{ $sections->phone_1}}</p>
 									</div>
 									<div class="info-detail-2">
 										<p>{{ $sections->email}}</p>
 									</div>
 									<div class="info-detail-2">
 										<p>{{ $sections->address}}</p>
 									</div>
 								</div>
 								<div class="inv-action">
 									<a href="{{ route('secciones.edit.cuarta', ['id' => $sections->id]) }}" class="btn btn-danger">Editar</a>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>

 			</div>

 		</div>
 	</div>
 	@endsection

 	@section('scripts')
 	<script src="{{ asset('/admins/vendor/sweetalerts/sweetalert2.min.js') }}"></script>
 	<script src="{{ asset('/admins/vendor/sweetalerts/custom-sweetalert.js') }}"></script>
 	@endsection