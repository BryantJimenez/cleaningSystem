@extends('layouts.admin')

@section('title', 'Inicio')

@section('links')
<link href="{{ asset('/admins/vendor/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('/admins/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row layout-top-spacing">

	<div class="col-12 layout-spacing">
		<div class="statbox widget box box-shadow">
			<div class="widget-content widget-content-area">

				<div class="row">
					<div class="col-xl-5 col-12 mb-3"> 
						<div class="d-flex justify-content-start text-white card-left-radius border-solid border-width-5px border-grey"> 
							<div class="rounded-circle border-solid border-width-5px border-grey">
								<img src="{{ asset('/web/images/cuidamostucasa-02.jpg') }}" class="card-logo-rounded" style="border-radius: 50px;" alt="Logo">
							</div>
							<div class="card-logo-text py-2">
								<p class="h5 text-primary font-weight-bold pl-2">Bienvenido:</p>
								<p class="pl-2">Administre toda su empresa de forma simple, fácil, comoda y a medida!</p>
							</div>
						</div>
					</div>

					<div class="col-xl-7 col-12">
						<div class="row">
							<div class="col-xl-6 col-md-6 col-sm-6 col-12 mb-3"> 
								<div class="d-flex justify-content-start text-white card-left-radius border-solid border-width-5px border-grey"> 
									<div class="rounded-circle border-solid border-width-5px border-grey">
										<img src="{{ asset('/admins/img/vivienda.png') }}" class="card-logo-rounded" alt="Viviendas">
									</div>
									<div class="py-2 counter-card">
										<p class="h5 font-weight-bold pl-2">Viviendas</p>
										<p class="h3 font-weight-bold text-primary text-center pl-2">{{ $news }}</p>
									</div>
								</div>
							</div>

							<div class="col-xl-6 col-md-6 col-sm-6 col-12 mb-3"> 
								<div class="d-flex justify-content-start text-white card-left-radius border-solid border-width-5px border-grey"> 
									<div class="rounded-circle border-solid border-width-5px border-grey">
										<img src="{{ asset('/admins/img/clientes.png') }}" class="card-logo-rounded" alt="Clientes">
									</div>
									<div class="py-2 counter-card">
										<p class="h5 font-weight-bold pl-2">Clientes</p>
										<p class="h3 font-weight-bold text-success text-center pl-2">{{ $users }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
						<div class="widget widget-chart-two">
							<div class="widget-heading">
								<h5 class="">Las 5 Categorías más Visitadas</h5>
							</div>
							<div class="widget-content">
								<div id="categoriesViews" class=""></div>
							</div>
						</div>
					</div>

					<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
						<div class="widget widget-chart-one">
							<div class="widget-heading">
								<ul class="tabs tab-pills">
									<li><a href="javascript:void(0);" id="week_tab" class="tabmenu">Semanal</a></li>
									<li><a href="javascript:void(0);" id="month_tab" class="tabmenu">Mensual</a></li>
								</ul>
							</div>

							<div class="widget-content">
								<div class="tabs tab-content" tab="week_tab">
									<div id="content_1" class="tabcontent"> 
										<div id="weeklyViews"></div>
									</div>
								</div>
							</div>

							<div class="widget-content d-none" tab="month_tab">
								<div class="tabs tab-content">
									<div id="content_1" class="tabcontent"> 
										<div id="monthlyViews"></div>
									</div>
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

@section('scripts')
<script src="{{ asset('/admins/vendor/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('/admins/js/statistics.js') }}"></script>
@endsection