 @extends('layouts.admin')

@section('title', 'Lista de Pagos')

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
						<h4>Lista de Pagos</h4>
					</div>                 
				</div>
			</div>
			<div class="widget-content widget-content-area shadow-none">

				<div class="row">
					<div class="col-12">
						<div class="text-right">
							<a href="{{ route('pagos.create') }}" class="btn btn-primary">Agregar</a>
						</div>

						<div class="table-responsive mb-4 mt-4">
							<table class="table table-hover table-export">
								<thead>
									<tr>
										<th>#</th>
										<th>Responsable</th>
										<th>Transaccion</th>
										<th>Total</th>
										<th>Compra</th>
										<th>Fecha</th>
										<th>Estado</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									@foreach($payments as $p)
									<tr>
										<td>{{$num++}}</td>
										<td>{{$p->user->name." ".$p->user->lastname}}</td>
										<td>{!! typePay($p->type_pay) !!}</td>
										<td>{{$p->total}}</td>
										<td>
											@if($p->contract_id!==NULL)
											Pago de Contrato
											@elseif($p->service_id!==NULL)
											Pago de Servicio
											@else
											Pago de Vivienda
											@endif
										</td>
										<td>{{$p->date}}</td>
										<td>{!! statePay($p->state) !!}</td>
										<td>
											<div class="btn-group" role="group">
												@if($p->contract_id!==NULL)
												<a href="{{ route('pagos.show.C', ['id' => $p->id]) }}" class="btn btn-primary btn-sm bs-tooltip" title="Ver Mas"><i class="fa fa-user"></i></a>
												@else
												<a href="{{ route('pagos.show', ['slug' => $p->slug]) }}" class="btn btn-primary btn-sm bs-tooltip" title="Ver Mas"><i class="fa fa-user"></i></a>
												@endif
												@if($p->state==2)
												<button type="button" class="btn btn-success btn-sm bs-tooltip" title="Aprobar"><i class="fa fa-check"></i></button>
												<button type="button" class="btn btn-danger btn-sm bs-tooltip" title="Denegar" ><i class="fa fa-power-off"></i></button>
												@endif
												
											</div>
										</td>
									</tr>
									@endforeach
									
								</tbody>
							</table>
						</div>
					</div>                                        
				</div>

			</div>
		</div>
	</div>

</div>

<div class="modal fade" id="deactiveAdmin" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">¿Estás seguro de que quieres desactivar este administrador?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn" data-dismiss="modal">Cancelar</button>
				<form action="#" method="POST" id="formDeactiveAdmin">
					@csrf
					@method('PUT')
					<button type="submit" class="btn btn-primary">Desactivar</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="activeAdmin" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">¿Estás seguro de que quieres activar este administrador?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn" data-dismiss="modal">Cancelar</button>
				<form action="#" method="POST" id="formActiveAdmin">
					@csrf
					@method('PUT')
					<button type="submit" class="btn btn-primary">Activar</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
<script src="{{ asset('/admins/vendor/table/datatable/datatables.js') }}"></script>
<script src="{{ asset('/admins/vendor/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/table/datatable/button-ext/jszip.min.js') }}"></script>    
<script src="{{ asset('/admins/vendor/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/table/datatable/button-ext/buttons.print.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('/admins/vendor/sweetalerts/custom-sweetalert.js') }}"></script>
@endsection