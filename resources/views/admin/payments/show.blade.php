@extends('layouts.admin')

@section('title', 'Detalles de Pago')

@section('links')
<link href="{{ asset('/admins/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/admins/css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="col-12 layout-spacing mt-3">
	<div class="statbox widget box box-shadow">
		<div class="widget-header">
			<div class="row">
				<div class="col-xl-12 col-md-12 col-sm-12 col-12">
					<h4>Detalles de Pago</h4>
				</div>                 
			</div>
		</div>


		<div class="row">
			<div class="col-lg-4 layout-top-spacing">
				<div class="card component-card_2">
					<img src="/admins/img/households/400x300.jpg" class="card-img-top" alt="widget-card-2">
					<div class="card-body">
						<h5 class="card-title">Titulo</h5>
						<p class="card-text">Descripcion</p>
						<a href="#" class="btn btn-primary">Ver Mas</a>
					</div>
				</div>
			</div>

			<div class="col-lg-8 layout-top-spacing">
				<div class="widget widget-account-invoice-one">

					<div class="widget-heading">
						<h5 class="">Accion</h5>
					</div>

					<div class="widget-content">
						<div class="invoice-box">

							<div class="acc-total-info">
								<h5>Tipo de Transaccion</h5>
								<p class="acc-amount">Total</p>
							</div>

							<div class="inv-detail">                                        
								<div class="info-detail-1">
									<p>Propietario</p>
									<p>....</p>
								</div>
								<div class="info-detail-2">
									<p>Fecha</p>
									<p>....</p>
								</div>
								<div class="info-detail-2">
									<p>Estado</p>
									<p><span class="badge badge-warning">Pendiente</span></p>
								</div>
								
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection