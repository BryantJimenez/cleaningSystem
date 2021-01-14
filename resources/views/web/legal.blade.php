 @extends('layouts.web')

 @section('title', 'Cuidamos Tu Casa')

 @section('links')
 <link rel="stylesheet" href="{{ asset('/admins/vendor/dropify/dropify.min.css') }}">
 <link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
 @endsection


 @section('content')

 <section class="hero-wrap hero-wrap-2" style="background-image: url('web/images/aviso.jpg');" data-stellar-background-ratio="0.5">
 	<div class="overlay"></div>
 	<div class="container">
 		<div class="row no-gutters slider-text align-items-end justify-content-center">
 			<div class="col-md-9 ftco-animate pb-5 text-center">
 				<h1 class="mb-3 bread">Aviso Legal</h1>
 				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Aviso Legal</a></span> </p>
 			</div>
 		</div>
 	</div>
 </section>

 <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="section-counter" data-section="about">
 	<div class="container">
 		<div class="row d-flex">

 			<div class="col-md-6 col-lg-12 pl-lg-5 py-5">
 				<div class="row justify-content-start pb-3">
 					<div class="col-md-12 heading-section ftco-animate">
 						<span class="subheading">Política de privacidad</span>

 						{!!$section->legal!!}
 						
 					</div>
 				</div>
 				<div class="row">
 					<div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate d-flex">
 						<div class="block-18 text-center p-4 mb-4 align-self-stretch d-flex">
 							<div class="text">
 								<strong class="number" data-number="100">0</strong>%
 								<span>Profesionales</span>
 							</div>
 						</div>
 					</div>
 					<div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate d-flex">
 						<div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
 							<div class="text">
 								<strong class="number" data-number="100">0</strong>%
 								<span>Transparencia</span>
 							</div>
 						</div>
 					</div>
 					<div class="col-md-6 col-lg-4 justify-content-center counter-wrap ftco-animate d-flex">
 						<div class="block-18 text-center py-4 px-3 mb-4 align-self-stretch d-flex">
 							<div class="text">
 								<strong class="number" data-number="100">0</strong>%
 								<span>Compromiso</span>
 							</div>
 						</div>
 					</div>

 				</div>
 			</div>
 		</div>
 	</div>
 </section>

 @endsection

 @section('scripts')
 <script src="{{ asset('/admins/vendor/dropify/dropify.min.js') }}"></script>
 <script src="{{ asset('/admins/vendor/validate/jquery.validate.js') }}"></script>
 <script src="{{ asset('/admins/vendor/validate/additional-methods.js') }}"></script>
 <script src="{{ asset('/admins/vendor/validate/messages_es.js') }}"></script>
 <script src="{{ asset('/admins/js/validate.js') }}"></script>
 <script src="{{ asset('/admins/vendor/lobibox/Lobibox.js') }}"></script>
 @endsection