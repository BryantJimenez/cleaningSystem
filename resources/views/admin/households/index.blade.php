  @extends('layouts.admin')

  @section('title', 'Lista de Viviendas')

  @section('links')
  <link href="{{ asset('/admins/vendor/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/admins/vendor/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/admins/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/admins/css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/admins/css/widgets/modules-widgets.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/admins/css/elements/custom-pagination.css') }}" rel="stylesheet" type="text/css" />
  

  @endsection

  @section('content')

  <div class="row sales">

  	<div class="col-12 layout-spacing">
  		<div class="statbox widget box box-shadow">
  			<div class="widget-header">
  				<div class="row">
  					<div class="col-xl-12 col-md-12 col-sm-12 col-12">
  						<h4>Viviendas</h4>
  					</div>                 
  				</div>
  			</div>

  			<div class="text-right mb-4">
  				<a href="{{ route('viviendas.create') }}" class="btn btn-primary">Agregar</a>
  			</div>

  			<div class="search-input-group-style input-group mb-3">
  				<div class="input-group-prepend">
  					<span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
  				</div>
  				<input type="text" class="form-control" placeholder="Buscar por 'Categoria, Titulo Tipo' " aria-label="Username" aria-describedby="basic-addon1">
  			</div>

  			<div class="row">

  				<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 card component-card_9">
  					<img src="{{ asset('/admins/img/households/400x300.jpg') }}" class="card-img-top" alt="widget-card-2">
  					<div class="card-body">
  						<p class="meta-date">Fecha</p>
  						<h5 class="card-title">Titulo</h5>
  						<p class="card-text">Categoria</p>
  						<p class="card-text"><strong>Precio</strong></p>
  						<div class="meta-info">
  							<div class="meta-user">
  								<div class="user-name">Propietario</div>
  							</div>
  						</div>
  						<div class="meta-info">
  							<div class="meta-user">
  								<span class="badge badge-primary">En Venta</span>
  								<span class="badge badge-success">En Alquiler</span>
  							</div>
  						</div>
  						<div class="text-center mt-4" >
                <a href="{{ route('mis.servicios') }}" class="btn btn-warning mt-1">Servicios Realizados</a>
                <a href="{{ route('mis.viviendas') }}" class="btn btn-primary mt-1">Ver Mas</a>
                <a href="#" class="btn btn-success mt-1">Adquirir</a>
                <a href="#" class="btn btn-danger mt-1">Editar</a>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 card component-card_9">
           <img src="{{ asset('/admins/img/households/400x300.jpg') }}" class="card-img-top" alt="widget-card-2">
           <div class="card-body">
            <p class="meta-date">Fecha</p>
            <h5 class="card-title">Titulo</h5>
            <p class="card-text">Categoria</p>
            <p class="card-text"><strong>Precio</strong></p>
            <div class="meta-info">
             <div class="meta-user">
              <div class="user-name">Propietario</div>
            </div>
          </div>
          <div class="meta-info">
           <div class="meta-user">
            <span class="badge badge-primary">En Venta</span>
            <span class="badge badge-success">En Alquiler</span>
          </div>
        </div>
        <div class="text-center mt-4" >
          <a href="{{ route('mis.servicios') }}" class="btn btn-warning mt-1">Servicios Realizados</a>
          <a href="{{ route('mis.viviendas') }}" class="btn btn-primary mt-1">Ver Mas</a>
          <a href="#" class="btn btn-success mt-1">Adquirir</a>
          <a href="#" class="btn btn-danger mt-1">Editar</a>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 card component-card_9">
     <img src="{{ asset('/admins/img/households/400x300.jpg') }}" class="card-img-top" alt="widget-card-2">
     <div class="card-body">
      <p class="meta-date">Fecha</p>
      <h5 class="card-title">Titulo</h5>
      <p class="card-text">Categoria</p>
      <p class="card-text"><strong>Precio</strong></p>
      <div class="meta-info">
       <div class="meta-user">
        <div class="user-name">Propietario</div>
      </div>
    </div>
    <div class="meta-info">
     <div class="meta-user">
      <span class="badge badge-primary">En Venta</span>
      <span class="badge badge-success">En Alquiler</span>
    </div>
  </div>
  <div class="text-center mt-4" >
    <a href="{{ route('mis.servicios') }}" class="btn btn-warning mt-1">Servicios Realizados</a>
    <a href="{{ route('mis.viviendas') }}" class="btn btn-primary mt-1">Ver Mas</a>
    <a href="#" class="btn btn-success mt-1">Adquirir</a>
    <a href="#" class="btn btn-danger mt-1">Editar</a>
  </div>


</div>
</div>

<center>
  <div class="paginating-container pagination-default mt-5">
    <ul class="pagination text-center">
      <li class="prev"><a href="javascript:void(0);">Prev</a>
      </li>
      <li><a href="javascript:void(0);">1</a></li>
      <li class="active"><a href="javascript:void(0);">2</a>
      </li>
      <li><a href="javascript:void(0);">3</a></li>
      <li class="next"><a href="javascript:void(0);">Next</a>
      </li>
    </ul>
  </div>
</center>

</div>

</div>
</div>
</div>




{{--   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 card component-card_9">
  	<img src="{{ asset('/admins/img/households/400x300.jpg') }}" class="card-img-top" alt="widget-card-2">
  	<div class="card-body">
  		<p class="meta-date">25 Jan 2020</p>
  		<h5 class="card-title">How to Start a Blog in 5 Easy Steps.</h5>
  		<p class="card-text">Vestibulum vestibulum tortor ut eros tincidunt, ut rutrum elit volutpat.</p>
  		<div class="meta-info">
  			<div class="meta-user">
  				<div class="avatar avatar-sm">
  					<span class="avatar-title rounded-circle">AG</span>
  				</div>
  				<div class="user-name">Luke Ivory</div>
  			</div>
  		</div>
  	</div>
  </div>
  --}}
  @endsection

  @section('scripts')
  <script src="{{ asset('/admins/vendor/sweetalerts/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('/admins/vendor/sweetalerts/custom-sweetalert.js') }}"></script>
  @endsection