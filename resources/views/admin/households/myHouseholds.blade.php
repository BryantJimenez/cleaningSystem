 @extends('layouts.admin')

 @section('title', 'Mi Vivienda')


 @section('links')
 <link href="{{ asset('/admins/css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('/admins/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('/admins/css/components/custom-carousel.css') }}" rel="stylesheet" type="text/css" />

 <link href="{{ asset('/admins/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />



 @endsection


 @section('content')

 <div class="row layout-top-spacing">

 	<div class="col-12 layout-spacing">
 		<div class="statbox widget box box-shadow">
 			<div class="widget-header">
 				<div class="row">
 					<div class="col-xl-12 col-md-12 col-sm-12 col-12">
 						<h4>Mi Vivienda</h4>
 					</div>                 
 				</div>
 			</div>

 			<div class="row">

 				<div class="col-lg-4 layout-spacing">

 					<div class="widget widget-account-invoice-one">

 						<div class="widget-heading">
 							<h5 class="">Titulo</h5>
 						</div>

 						<div class="widget-content">
 							<div class="invoice-box">

 								<div class="acc-total-info">
 									<h5>Descripcion</h5>
 									<p class="acc-amount">Precio</p>
 								</div>

 								<div class="inv-detail">                                        
 									<div class="info-detail-1">
 										<p>Categoria</p>	
 									</div>
 									<div class="info-detail-2">
 										<p>Tipo de vivienda</p>
 										<p>$ 17.82</p>
 									</div>
 									<div class="info-detail-3 info-sub">
 										<div class="info-detail">
 											<p>Precio Alquiler</p>
 											<p>$ -0.68</p>
 										</div>
 										<div class="info-detail-2">
 											<p>N de llaves</p>
 											<p>$ 0</p>
 										</div>
 										<div class="info-detail-2">
 											<p>Direccion</p>
 											<p>$ -0.68</p>
 										</div>
 										<div class="info-detail-2">
 											<p>Precio Enero</p>
 											<p>$ -0.68</p>
 										</div>
 										<div class="info-detail-2">
 											<p>Precio Julio</p>
 											<p>$ -0.68</p>
 										</div>
 										<div class="info-detail-2">
 											<p>Precio Agosto</p>
 											<p>$ -0.68</p>
 										</div>
 										<div class="info-detail-2">
 											<p>Precio por dias</p>
 											<p>$ -0.68</p>
 										</div>
 										<div class="info-detail-2">
 											<p>N Ciudad</p>
 											<p>$ -0.68</p>
 										</div>
 										<div class="info-detail-2">
 											<p>Metros cuadrados</p>
 											<p>$ -0.68</p>
 										</div>
 										<div class="info-detail-2">
 											<p>Metros cuadrados piscina</p>
 											<p>$ -0.68</p>
 										</div>
 										<div class="info-detail-2">
 											<p>Compania de alarmas</p>
 											<p>$ -0.68</p>
 										</div>
 										<div class="info-detail-2">
 											<p>Compania electrica</p>
 											<p>$ -0.68</p>
 										</div>
 										<div class="info-detail-2">
 											<p>Compania de agua</p>
 											<p>$ -0.68</p>
 										</div>
 										<div class="info-detail-2">
 											<p>Compania de telefono</p>
 											<p>$ -0.68</p>
 										</div>
 									</div>
 								</div>

 								
 							</div>
 						</div>

 					</div>
 				</div>

 				<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
 					<div class="widget widget-table-two">

 						<div class="widget-heading">
 							<h5 class="">Recent Orders</h5>
 						</div>

 						<div class="widget-content">
 							<div class="table-responsive">
 								<table class="table">
 									<thead>
 										<tr>
 											<th><div class="th-content">Tipo de pago</div></th>
 											<th><div class="th-content">Transaccion</div></th>
 											<th><div class="th-content">Total</div></th>
 											<th><div class="th-content th-heading">Fecha</div></th>
 											<th><div class="th-content">Status</div></th>
 										</tr>
 									</thead>
 									<tbody>
 										<tr>
 											<td><div class="td-content customer-name">Alquiler</div></td>
 											<td><div class="td-content product-brand">PayPal</div></td>
 											<td><div class="td-content">30$</div></td>
 											<td><div class="td-content pricing"><span class="">Fecha</span></div></td>
 											<td><div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div></td>
 										</tr>
 										<tr>
 											<td><div class="td-content customer-name">Alquiler</div></td>
 											<td><div class="td-content product-brand">PayPal</div></td>
 											<td><div class="td-content">30$</div></td>
 											<td><div class="td-content pricing"><span class="">Fecha</span></div></td>
 											<td><div class="td-content"><span class="badge outline-badge-primary">Aprobado</span></div></td>
 										</tr>
 										<tr>
 											<td><div class="td-content customer-name">Alquiler</div></td>
 											<td><div class="td-content product-brand">PayPal</div></td>
 											<td><div class="td-content">30$</div></td>
 											<td><div class="td-content pricing"><span class="">Fecha</span></div></td>
 											<td><div class="td-content"><span class="badge outline-badge-danger">Denegado</span></div></td>
 										</tr>
 										<tr>
 											<td><div class="td-content customer-name">Alquiler</div></td>
 											<td><div class="td-content product-brand">PayPal</div></td>
 											<td><div class="td-content">30$</div></td>
 											<td><div class="td-content pricing"><span class="">Fecha</span></div></td>
 											<td><div class="td-content"><span class="badge outline-badge-warning">En Espera</span></div></td>
 										</tr>
 										<tr>
 											<td><div class="td-content customer-name">Alquiler</div></td>
 											<td><div class="td-content product-brand">PayPal</div></td>
 											<td><div class="td-content">30$</div></td>
 											<td><div class="td-content pricing"><span class="">Fecha</span></div></td>
 											<td><div class="td-content"><span class="badge outline-badge-warning">En Espera</span></div></td>
 										</tr>
 										<tr>
 											<td><div class="td-content customer-name">Alquiler</div></td>
 											<td><div class="td-content product-brand">PayPal</div></td>
 											<td><div class="td-content">30$</div></td>
 											<td><div class="td-content pricing"><span class="">Fecha</span></div></td>
 											<td><div class="td-content"><span class="badge outline-badge-warning">En Espera</span></div></td>
 										</tr>
 										<tr>
 											<td><div class="td-content customer-name">Alquiler</div></td>
 											<td><div class="td-content product-brand">PayPal</div></td>
 											<td><div class="td-content">30$</div></td>
 											<td><div class="td-content pricing"><span class="">Fecha</span></div></td>
 											<td><div class="td-content"><span class="badge outline-badge-warning">En Espera</span></div></td>
 										</tr>
 									</tbody>
 								</table>
 							</div>
 						</div>
 					</div>
 				</div>





 				<div id="carouselExampleCaptions" class="carousel slide col-lg-8" data-ride="carousel">
 					<ol class="carousel-indicators">
 						<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
 						<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
 						<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
 					</ol>
 					<div class="carousel-inner ">
 						<div class="carousel-item active">
 							<img class="d-block w-100" src="/admins/img/households/640x426.jpg" alt="First slide">
 							<div class="carousel-caption d-none d-sm-block">
 								<h3>Titulo de la Seccion</h3>
 								<h5>Descripcion</h5>
 							</div>
 						</div>
 						<div class="carousel-item">
 							<img class="d-block w-100" src="/admins/img/households/640x426.jpg" alt="Second slide">
 							<div class="carousel-caption d-none d-sm-block">
 								<h3>Titulo de la Seccion</h3>
 								<h5>Descripcion</h5>
 							</div>
 						</div>
 						<div class="carousel-item">
 							<img class="d-block w-100" src="/admins/img/households/640x426.jpg" alt="Third slide">
 							<div class="carousel-caption d-none d-sm-block">
 								<h3>Titulo de la Seccion</h3>
 								<h5>Descripcion</h5>
 							</div>
 						</div>
 					</div>
 					<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
 						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
 						<span class="sr-only">Anterior</span>
 					</a>
 					<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
 						<span class="carousel-control-next-icon" aria-hidden="true"></span>
 						<span class="sr-only">Siguiente</span>
 					</a>
 				</div>

 				<div class="col-lg-4 layout-spacing">

 					<div class="widget widget-activity-four">

 						<div class="widget-heading">
 							<h5 class="">Servicios Realizados</h5>
 						</div>

 						<div class="widget-content">

 							<div class="mt-container mx-auto">
 								<div class="timeline-line">

 									<div class="item-timeline timeline-primary">
 										<div class="t-dot" data-original-title="" title="">
 										</div>
 										<div class="t-text">
 											<p><span>Nombre</span> N Empleados</p>
 											<span class="badge badge-danger">Pendiente</span>
 											<p class="t-time">Fecha</p>
 										</div>
 									</div>

 									<div class="item-timeline timeline-primary">
 										<div class="t-dot" data-original-title="" title="">
 										</div>
 										<div class="t-text">
 											<p><span>Nombre</span> N Empleados</p>
 											<span class="badge badge-success">Completado</span>
 											<p class="t-time">Fecha</p>
 										</div>
 									</div>

 									<div class="item-timeline timeline-primary">
 										<div class="t-dot" data-original-title="" title="">
 										</div>
 										<div class="t-text">
 											<p><span>Nombre</span> N Empleados</p>
 											<span class="badge badge-danger">Pendiente</span>
 											<p class="t-time">Fecha</p>
 										</div>
 									</div>

 									<div class="item-timeline timeline-primary">
 										<div class="t-dot" data-original-title="" title="">
 										</div>
 										<div class="t-text">
 											<p><span>Nombre</span> N Empleados</p>
 											<span class="badge badge-danger">Pendiente</span>
 											<p class="t-time">Fecha</p>
 										</div>
 									</div>

 									<div class="item-timeline timeline-primary">
 										<div class="t-dot" data-original-title="" title="">
 										</div>
 										<div class="t-text">
 											<p><span>Nombre</span> N Empleados</p>
 											<span class="badge badge-danger">Pendiente</span>
 											<p class="t-time">Fecha</p>
 										</div>
 									</div>

 									<div class="item-timeline timeline-primary">
 										<div class="t-dot" data-original-title="" title="">
 										</div>
 										<div class="t-text">
 											<p><span>Nombre</span> N Empleados</p>
 											<span class="badge badge-danger">Pendiente</span>
 											<p class="t-time">Fecha</p>
 										</div>
 									</div>

 									<div class="item-timeline timeline-primary">
 										<div class="t-dot" data-original-title="" title="">
 										</div>
 										<div class="t-text">
 											<p><span>Nombre</span> N Empleados</p>
 											<span class="badge badge-danger">Pendiente</span>
 											<p class="t-time">Fecha</p>
 										</div>
 									</div>

 									<div class="item-timeline timeline-primary">
 										<div class="t-dot" data-original-title="" title="">
 										</div>
 										<div class="t-text">
 											<p><span>Nombre</span> N Empleados</p>
 											<span class="badge badge-danger">Pendiente</span>
 											<p class="t-time">Fecha</p>
 										</div>
 									</div>

 									<div class="item-timeline timeline-primary">
 										<div class="t-dot" data-original-title="" title="">
 										</div>
 										<div class="t-text">
 											<p><span>Nombre</span> N Empleados</p>
 											<span class="badge badge-danger">Pendiente</span>
 											<p class="t-time">Fecha</p>
 										</div>
 									</div>

 									<div class="item-timeline timeline-primary">
 										<div class="t-dot" data-original-title="" title="">
 										</div>
 										<div class="t-text">
 											<p><span>Nombre</span> N Empleados</p>
 											<span class="badge badge-danger">Pendiente</span>
 											<p class="t-time">Fecha</p>
 										</div>
 									</div>

 									<div class="item-timeline timeline-primary">
 										<div class="t-dot" data-original-title="" title="">
 										</div>
 										<div class="t-text">
 											<p><span>Nombre</span> N Empleados</p>
 											<span class="badge badge-danger">Pendiente</span>
 											<p class="t-time">Fecha</p>
 										</div>
 									</div>

 								</div>                                    
 							</div>

 							<div class="tm-action-btn">
 								<button class="btn">Ver Todos <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
 							</div>
 						</div>
 					</div>
 				</div>

 			</div>




 		</div>
 	</div>
 </div>


 @endsection

