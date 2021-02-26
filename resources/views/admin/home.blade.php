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
               @if(Auth::user()->contract_id==NULL)
               <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <h2 class="display-4 mb-5  mt-4">Bienvenido, {{Auth::user()->name." ".Auth::user()->lastname}}!</h2>
                        <p class="lead mt-3 mb-4">Para registrar, vender o alquilar cualquiera de nuestras viviendas, deberas completar nuestro formulario de registro, por favor siga nuestras instrucciones</p>
                        <hr class="my-4">

                        <p class="lead">
                            <a class="btn btn-success" href="{{route('contratos')}}" role="button">Empezar -></a>
                        </p>
                    </div>
                </div>
            </div>

            @elseif(Auth::user()->contract_id!=NULL)

            @if(Auth::user()->type==='1' || Auth::user()->type==='2')
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
                          <p class="h3 font-weight-bold text-primary text-center pl-2"></p>
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


  <div class="col-xl-5 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-table-one">
        <div class="widget-heading">
            <h5 class="">Ultimas Transacciones</h5>
        </div>

        <div class="widget-content">
            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>Pago de Alquiler</h4>
                            <p class="meta-date">4 Agosto 1:00PM</p>
                        </div>

                    </div>
                    <div class="t-rate rate-dec">
                        <p><span>-$16.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                    </div>
                </div>
            </div>

            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="avatar avatar-xl">
                                <span class="avatar-title rounded-circle">CV</span>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>Compra de Vivienda</h4>
                            <p class="meta-date">4 Agosto 1:00PM</p>
                        </div>
                    </div>
                    <div class="t-rate rate-inc">
                        <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                    </div>
                </div>
            </div>

            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="avatar avatar-xl">
                                <span class="avatar-title rounded-circle">CS</span>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>Compra de Servicio</h4>
                            <p class="meta-date">4 Agosto 1:00PM</p>
                        </div>

                    </div>
                    <div class="t-rate rate-inc">
                        <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                    </div>
                </div>
            </div>

            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>Renovacion de Contrato</h4>
                            <p class="meta-date">4 Agosto 1:00PM</p>
                        </div>

                    </div>
                    <div class="t-rate rate-dec">
                        <p><span>-$32.00</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

    <div class="widget widget-activity-four">

        <div class="widget-heading">
            <h5 class="">Actividades Recientes</h5>
        </div>

        <div class="widget-content">

            <div class="mt-container mx-auto">
                <div class="timeline-line">

                    <div class="item-timeline timeline-primary">
                        <div class="t-dot" data-original-title="" title="">
                        </div>
                        <div class="t-text">
                            <p><span>Pago</span> De Alquiler</p>
                            <span class="badge badge-danger">Pendiente</span>
                            <p class="t-time">Justo Ahora</p>
                        </div>
                    </div>

                    <div class="item-timeline timeline-success">
                        <div class="t-dot" data-original-title="" title="">
                        </div>
                        <div class="t-text">
                            <p>Registro <a href="javascript:void(0);">de Vivienda</a></p>
                            <span class="badge badge-success">Completed</span>
                            <p class="t-time">2 min atras</p>
                        </div>
                    </div>

                    <div class="item-timeline  timeline-danger">
                        <div class="t-dot" data-original-title="" title="">
                        </div>
                        <div class="t-text">
                            <p>Compra <span>Servicios</span></p>
                            <span class="badge badge-danger">Pendiente</span>
                            <p class="t-time">14:00</p>
                        </div>
                    </div>

                    <div class="item-timeline  timeline-dark">
                        <div class="t-dot" data-original-title="" title="">
                        </div>
                        <div class="t-text">
                            <p>Registro <a href="javascript:void(0);">Servicio</a></p>
                            <span class="badge badge-success">Completado</span>
                            <p class="t-time">16:00</p>
                        </div>
                    </div>

                    <div class="item-timeline  timeline-warning">
                        <div class="t-dot" data-original-title="" title="">
                        </div>
                        <div class="t-text">
                            <p>Compra <a href="javascript:void(0);">Contrato</a>.</p>
                            <span class="badge badge-primary">En Progreso</span>
                            <p class="t-time">17:00</p>
                        </div>
                    </div>

                </div>                                    
            </div>

            <div class="tm-action-btn">
                <button class="btn">Ver Todo <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget-three">
        <div class="widget-heading">
            <h5 class="">Ingresos</h5>
        </div>
        <div class="widget-content">

            <div class="order-summary">

                <div class="summary-list">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    </div>
                    <div class="w-summary-details">

                        <div class="w-summary-info">
                            <h6>PayPal</h6>
                            <p class="summary-count">$92,600</p>
                        </div>

                        <div class="w-summary-stats">
                            <div class="progress">
                                <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="summary-list">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                    </div>
                    <div class="w-summary-details">

                        <div class="w-summary-info">
                            <h6>Bizum</h6>
                            <p class="summary-count">$37,515</p>
                        </div>

                        <div class="w-summary-stats">
                            <div class="progress">
                                <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="summary-list">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                    </div>
                    <div class="w-summary-details">

                        <div class="w-summary-info">
                            <h6>Transferencias</h6>
                            <p class="summary-count">$55,085</p>
                        </div>

                        <div class="w-summary-stats">
                            <div class="progress">
                                <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
</div>
@else
<div class="row">
   <div class="col-xl-5 col-12 mb-3"> 
      <div class="d-flex justify-content-start text-white card-left-radius border-solid border-width-5px border-grey"> 
         <div class="rounded-circle border-solid border-width-5px border-grey">
            <img src="{{ asset('/web/images/cuidamostucasa-02.jpg') }}" class="card-logo-rounded" style="border-radius: 50px;" alt="Logo">
        </div>
        <div class="card-logo-text py-2">
            <p class="h5 text-primary font-weight-bold pl-2">Bienvenido {{Auth::user()->name." ".Auth::user()->lastname}}:</p>
            <p class="pl-2">Administre todas sus viviendas de forma simple, fácil, comoda y a medida!</p>
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
              <p class="h5 font-weight-bold pl-2">Propias</p>
              <p class="h3 font-weight-bold text-primary text-center pl-2"></p>
          </div>
      </div>
  </div>

  <div class="col-xl-6 col-md-6 col-sm-6 col-12 mb-3"> 
    <div class="d-flex justify-content-start text-white card-left-radius border-solid border-width-5px border-grey"> 
       <div class="rounded-circle border-solid border-width-5px border-grey">
          <img src="{{ asset('/admins/img/clientes.png') }}" class="card-logo-rounded" alt="Clientes">
      </div>
      <div class="py-2 counter-card">
          <p class="h5 font-weight-bold pl-2">Alquiladas</p>
          <p class="h3 font-weight-bold text-success text-center pl-2">{{ $users }}</p>
      </div>
  </div>
</div>
</div>
</div>


<div class="col-xl-7 col-lg-12 col-md-8 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-table-one">
        <div class="widget-heading">
            <h5 class="">Ultimas Transacciones</h5>
        </div>

        <div class="widget-content">
            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>Pago de Alquiler</h4>
                            <p class="meta-date">4 Agosto 1:00PM</p>
                        </div>

                    </div>
                    <div class="t-rate rate-dec">
                        <p><span>-$16.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                    </div>
                </div>
            </div>

            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="avatar avatar-xl">
                                <span class="avatar-title rounded-circle">CV</span>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>Compra de Vivienda</h4>
                            <p class="meta-date">4 Agosto 1:00PM</p>
                        </div>
                    </div>
                    <div class="t-rate rate-inc">
                        <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                    </div>
                </div>
            </div>

            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="avatar avatar-xl">
                                <span class="avatar-title rounded-circle">CS</span>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>Compra de Servicio</h4>
                            <p class="meta-date">4 Agosto 1:00PM</p>
                        </div>

                    </div>
                    <div class="t-rate rate-inc">
                        <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                    </div>
                </div>
            </div>

            <div class="transactions-list">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>Renovacion de Contrato</h4>
                            <p class="meta-date">4 Agosto 1:00PM</p>
                        </div>

                    </div>
                    <div class="t-rate rate-dec">
                        <p><span>-$32.00</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

    <div class="widget widget-activity-four">

        <div class="widget-heading">
            <h5 class="">Actividades Recientes</h5>
        </div>

        <div class="widget-content">

            <div class="mt-container mx-auto">
                <div class="timeline-line">

                    <div class="item-timeline timeline-primary">
                        <div class="t-dot" data-original-title="" title="">
                        </div>
                        <div class="t-text">
                            <p><span>Pago</span> De Alquiler</p>
                            <span class="badge badge-danger">Pendiente</span>
                            <p class="t-time">Justo Ahora</p>
                        </div>
                    </div>

                    <div class="item-timeline timeline-success">
                        <div class="t-dot" data-original-title="" title="">
                        </div>
                        <div class="t-text">
                            <p>Registro <a href="javascript:void(0);">de Vivienda</a></p>
                            <span class="badge badge-success">Completed</span>
                            <p class="t-time">2 min atras</p>
                        </div>
                    </div>

                    <div class="item-timeline  timeline-danger">
                        <div class="t-dot" data-original-title="" title="">
                        </div>
                        <div class="t-text">
                            <p>Compra <span>Servicios</span></p>
                            <span class="badge badge-danger">Pendiente</span>
                            <p class="t-time">14:00</p>
                        </div>
                    </div>

                    <div class="item-timeline  timeline-dark">
                        <div class="t-dot" data-original-title="" title="">
                        </div>
                        <div class="t-text">
                            <p>Registro <a href="javascript:void(0);">Servicio</a></p>
                            <span class="badge badge-success">Completado</span>
                            <p class="t-time">16:00</p>
                        </div>
                    </div>

                    <div class="item-timeline  timeline-warning">
                        <div class="t-dot" data-original-title="" title="">
                        </div>
                        <div class="t-text">
                            <p>Compra <a href="javascript:void(0);">Contrato</a>.</p>
                            <span class="badge badge-primary">En Progreso</span>
                            <p class="t-time">17:00</p>
                        </div>
                    </div>

                </div>                                    
            </div>

            <div class="tm-action-btn">
                <button class="btn">Ver Todo <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
            </div>
        </div>
    </div>
</div>


</div>
@endif
@endif





</div>
</div>
</div>
</div>

@endsection

@section('scripts')
<script src="{{ asset('/admins/vendor/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('/admins/js/statistics.js') }}"></script>
@endsection