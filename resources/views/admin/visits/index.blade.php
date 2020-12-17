@extends('layouts.admin')

@section('title', 'Visitas')

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