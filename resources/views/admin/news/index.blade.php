@extends('layouts.admin')

@section('title', 'Lista de Noticias')

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
						<h4>Lista de Noticias</h4>
					</div>                 
				</div>
			</div>
			<div class="widget-content widget-content-area shadow-none">

				<div class="row">
					<div class="col-12">
						<div class="text-right">
							<a href="{{ route('noticias.create') }}" class="btn btn-primary">Agregar</a>
						</div>

						<div class="table-responsive mb-4 mt-4">
							<table class="table table-hover table-export">
								<thead>
									<tr>
										<th>#</th>
										<th>Título</th>
										<th>Categorías</th>
										<th>Estado</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									@foreach($news as $new)
									<tr>
										<td>{{ $num++ }}</td>
										<td>{{ $new->title }}</td>
										<td>
											@foreach($new->categories as $category)
											{{ $category->name }}
											@if(!$loop->last)
											<br>
											@endif
											@endforeach
										</td>
										<td>{!! stateNew($new->state) !!}</td>
										<td>
											<div class="btn-group" role="group">
												<a href="{{ route('noticias.edit', ['slug' => $new->slug]) }}" class="btn btn-info btn-sm bs-tooltip" title="Editar"><i class="fa fa-edit"></i></a>
												@if($new->state==1)
												<button type="button" class="btn btn-danger btn-sm bs-tooltip" title="Desactivar" onclick="deactiveNew('{{ $new->slug }}')"><i class="fa fa-power-off"></i></button>
												@else
												<button type="button" class="btn btn-success btn-sm bs-tooltip" title="Activar" onclick="activeNew('{{ $new->slug }}')"><i class="fa fa-check"></i></button>
												@endif
												<button type="button" class="btn btn-danger btn-sm bs-tooltip" title="Eliminar" onclick="deleteNew('{{ $new->slug }}')"><i class="fa fa-trash"></i></button>
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

<div class="modal fade" id="deactiveNew" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">¿Estás seguro de que quieres desactivar esta noticia?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn" data-dismiss="modal">Cancelar</button>
				<form action="#" method="POST" id="formDeactiveNew">
					@csrf
					@method('PUT')
					<button type="submit" class="btn btn-primary">Desactivar</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="activeNew" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">¿Estás seguro de que quieres activar esta noticia?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn" data-dismiss="modal">Cancelar</button>
				<form action="#" method="POST" id="formActiveNew">
					@csrf
					@method('PUT')
					<button type="submit" class="btn btn-primary">Activar</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteNew" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">¿Estás seguro de que quieres eliminar esta noticia?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn" data-dismiss="modal">Cancelar</button>
				<form action="#" method="POST" id="formDeleteNew">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-primary">Eliminar</button>
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