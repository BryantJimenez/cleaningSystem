 @extends('layouts.admin')

@section('title', 'Lista de empleados')

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
						<h4>Lista de empleados</h4>
					</div>                 
				</div>
			</div>
			<div class="widget-content widget-content-area shadow-none">

				<div class="row">
					<div class="col-12">
						<div class="text-right">
							<a href="{{ route('empleados.create') }}" class="btn btn-primary">Agregar</a>
						</div>

						<div class="table-responsive mb-4 mt-4">
							<table class="table table-hover table-export">
								<thead>
									<tr>
										<th>#</th>
										<th>Nombre</th>
										<th>Teléfono</th>
										<th>Correo</th>
										<th>Dirección</th>
										<th>DNI</th>
										<th>Estado</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									@foreach($business as $employee)
									<tr>
										<td>{{ $num++ }}</td>
										<td>{{ $employee->name." ".$employee->lastname }}</td>
										<td>{{ $employee->phone }}</td>
										<td>{{ $employee->email }}</td>
										<td>{{ $employee->address }}</td>
										<td>{{ $employee->dni }}</td>
										<td>{!! state($employee->state) !!}</td>
										<td>
											<div class="btn-group" role="group">
												
												<a href="{{ route('empleados.edit', ['slug' => $employee->slug]) }}" class="btn btn-info btn-sm bs-tooltip" title="Editar"><i class="fa fa-edit"></i></a>
												@if($employee->state==1)
												<button type="button" class="btn btn-danger btn-sm bs-tooltip" title="Desactivar" onclick="deactiveEmployee('{{ $employee->slug }}')"><i class="fa fa-power-off"></i></button>
												@else
												<button type="button" class="btn btn-success btn-sm bs-tooltip" title="Activar" onclick="activeEmployee('{{ $employee->slug }}')"><i class="fa fa-check"></i></button>
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