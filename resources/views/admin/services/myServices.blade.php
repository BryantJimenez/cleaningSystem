 @extends('layouts.admin')

 @section('title', 'Mis Servicios')


 @section('links')
 <link href="{{ asset('/admins/css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('/admins/css/widgets/modules-widgets.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('/admins/css/elements/custom-pagination.css') }}" rel="stylesheet" type="text/css" />

 @endsection


 @section('content')

 <div class="row layout-top-spacing">

 	<div class="col-12 layout-spacing">
 		<div class="statbox widget box box-shadow">
 			<div class="widget-header">
 				<div class="row">
 					<div class="col-xl-12 col-md-12 col-sm-12 col-12">
 						<h4>Mis Servicios</h4>
 					</div>                 



 					<div class="card component-card_9 col-lg-4 mt-3 ">
 						<img src="/admins/img/households/400x300.jpg" class="card-img-top pt-1" alt="widget-card-2">
 						<div class="card-body">
 							<p class="meta-date">Fecha Inicial / Fecha Cierre</p>
 							<h5 class="card-title">Titulo del Servicio</h5>
 							<p class="card-text"><span class="badge badge-primary">Compania</span></p>
 							<div class="meta-info">
 								<div class="meta-user">
 									<div class="user-name">Titulo de Propiedad</div>
 								</div>
 								<div class="meta-action">
 									<div class="meta-likes">
 										N Empleados
 									</div>

 									<div class="meta-view">
 										Precio
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>


 					<div class="card component-card_9 col-lg-4 mt-3 ">
 						<img src="/admins/img/households/400x300.jpg" class="card-img-top pt-1" alt="widget-card-2">
 						<div class="card-body">
 							<p class="meta-date">Fecha Inicial / Fecha Cierre</p>
 							<h5 class="card-title">Titulo del Servicio</h5>
 							<p class="card-text"><span class="badge badge-primary">Compania</span></p>
 							<div class="meta-info">
 								<div class="meta-user">
 									<div class="user-name">Titulo de Propiedad</div>
 								</div>
 								<div class="meta-action">
 									<div class="meta-likes">
 										N Empleados
 									</div>

 									<div class="meta-view">
 										Precio
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>

 					<div class="card component-card_9 col-lg-4 mt-3 ">
 						<img src="/admins/img/households/400x300.jpg" class="card-img-top pt-1" alt="widget-card-2">
 						<div class="card-body">
 							<p class="meta-date">Fecha Inicial / Fecha Cierre</p>
 							<h5 class="card-title">Titulo del Servicio</h5>
 							<p class="card-text"><span class="badge badge-primary">Compania</span></p>
 							<div class="meta-info">
 								<div class="meta-user">
 									<div class="user-name">Titulo de Propiedad</div>
 								</div>
 								<div class="meta-action">
 									<div class="meta-likes">
 										N Empleados
 									</div>

 									<div class="meta-view">
 										Precio
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

