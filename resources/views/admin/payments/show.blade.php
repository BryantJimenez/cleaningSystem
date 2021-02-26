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



		@if($payment->household_id!==NULL)									
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
		@endif	

			<div class="col-lg-8 layout-top-spacing" style="margin-left: 15%;">
				<div class="widget widget-account-invoice-one">

					<div class="widget-heading">
						<h5 class="">@if($payment->contract_id!==NULL)
											Pago de Contrato
											@elseif($payment->service_id!==NULL)
											Pago de Servicio
											@else
											Pago de Vivienda
											@endif</h5>
					</div>

					<div class="widget-content ">
						<div class="invoice-box">

							<div class="acc-total-info">
								<h5>{!! typePay($payment->type_pay) !!}</h5>
								<p class="acc-amount">{{$payment->total}} €</p>
							</div>

							<div class="inv-detail">                                        
								<div class="info-detail-1">
									<p>Propietario</p>
									<p>{{$payment->user->name." ".$payment->user->lastname}}</p>
								</div>
								<div class="info-detail-1">
									<p>Poblacion</p>
									<p>...</p>
								</div><div class="info-detail-1">
									<p>Provincia</p>
									<p>....</p>
								</div><div class="info-detail-1">
									<p>DNI</p>
									<p>{{$payment->user->dni}}</p>
								</div>
								<div class="info-detail-2">
									<p>Fecha</p>
									<p>{{$payment->date}}</p>
								</div>
								@if($payment->type_pay==1)
								<div class="info-detail-2">
									<p>Banco Emisor</p>
									<p>{{$payment->issue->name}}</p>
								</div>
								<div class="info-detail-2">
									<p>Referencia</p>
									<p>{{$payment->reference}}</p>
								</div>
								@endif
								<div class="info-detail-2">
									<p>Estado</p>
									<p>{!! statePay($payment->state) !!}</p>
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