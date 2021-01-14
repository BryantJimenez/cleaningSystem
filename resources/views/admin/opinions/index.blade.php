 @extends('layouts.admin')

 @section('title', 'Lista de Opiniones')

 @section('links')
 <link rel="stylesheet" type="text/css" href="{{ asset('/admins/vendor/table/datatable/datatables.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('/admins/vendor/table/datatable/custom_dt_html5.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('/admins/vendor/table/datatable/dt-global_style.css') }}">
 <link href="{{ asset('/admins/vendor/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('/admins/vendor/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('/admins/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
 @endsection

 @section('content')

 <div class="row layout-top-spacing">

 	<div class="col-12 layout-spacing">
 		<div class="statbox widget box box-shadow">
 			<div class="widget-header">
 				<div class="row">
 					<div class="col-xl-12 col-md-12 col-sm-12 col-12">
 						<h4>Lista de Opiniones</h4>
 					</div>                 
 				</div>
 			</div>	
 		</div>
 	</div>
 </div>

 <div class="text-left">
 	<a href="{{ route('opiniones.create') }}" class="btn btn-primary">Registrar Opinión</a>
 </div>

 <div class="row">

 	@foreach($opinions as $opinion)
 	<div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">
 		<div class="user-profile layout-spacing">
 			<div class="widget-content widget-content-area">
 				<div class="d-flex justify-content-between">
 					<h3 class="">Opinion N{{$num++}} </h3>
 					<a href="{{ route('opiniones.edit', ['slug' => $opinion->slug]) }}" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
 				</div>
 				<div class="text-center user-info">
 					<img src="{{ asset('/admins/img/opinions/'.$opinion->photo) }}" width="90" height="90" alt="Foto de perfil">
 					<p class="">{{ $opinion->name." ".$opinion->lastname }}</p>
 				</div>
 				<div class="user-info-list">

 					<div class="">
 						<ul class="contacts-block list-unstyled">
 							<li class="contacts-block__item">
 								{{$opinion->name}}
 							</li>
 							<li class="contacts-block__item text-break">
 								{!! $opinion->opinion !!}
 							</li>
 							<li class="contacts-block__item">
 								{{ $opinion->position }}
 							</li>
 						</ul>
 					</div>                                    
 				</div>
 			</div>
 		</div>
 	</div>

 	@endforeach

 </div>


 @endsection

 @section('scripts')
 <script src="{{ asset('/admins/vendor/ckeditor/ckeditor.js') }}"></script>
 <script src="{{ asset('/admins/vendor/table/datatable/datatables.js') }}"></script>
 <script src="{{ asset('/admins/vendor/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('/admins/vendor/table/datatable/button-ext/jszip.min.js') }}"></script>    
 <script src="{{ asset('/admins/vendor/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('/admins/vendor/table/datatable/button-ext/buttons.print.min.js') }}"></script>
 <script src="{{ asset('/admins/vendor/sweetalerts/sweetalert2.min.js') }}"></script>
 <script src="{{ asset('/admins/vendor/sweetalerts/custom-sweetalert.js') }}"></script>
 @endsection