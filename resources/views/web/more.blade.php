@extends('layouts.web')

@section('title', 'Cuidamos Tu Casa')

@section('links')
<link rel="stylesheet" href="{{ asset('/admins/vendor/dropify/dropify.min.css') }}">
<link rel="stylesheet" href="{{ asset('/admins/vendor/lobibox/Lobibox.min.css') }}">
@endsection


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('web/images/vivienda.jpeg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate pb-5 text-center">
				<h1 class="mb-3 bread">NOMBRE DE LA VIVIENDA</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Viviendas <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Viviendas Disponibles <i class="ion-ios-arrow-forward"></i></a></span> <span>Ver Más <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section ftco-project">
	<div class="container-fluid px-md-5">

		<div class="row justify-content-center pb-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading">Detalles de la vivienda</span>
				<h2 class="mb-4">Categoría</h2>
				<p>Descripcion descripcion descripcion Descripcion descripcion descripcion Descripcion descripcion descripcion Descripcion descripcion descripcion Descripcion descripcion descripcion Descripcion descripcion descripcion</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 testimonial">
				<div class="carousel-project owl-carousel">
					<div class="item">
						<div class="project">
							<div class="img">
								<img src="/web/images/project-1.jpg" class="img-fluid" alt="Colorlib Template">
								<a href="/web/images/project-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
									<span class="icon-expand"></span>
								</a>
							</div>
							<div class="text px-4">
								<h3><a href="#">Nombre de la sección</a></h3>
								<span>Descripción</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="project">
							<div class="img">
								<img src="/web/images/project-2.jpg" class="img-fluid" alt="Colorlib Template">
								<a href="/web/images/project-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
									<span class="icon-expand"></span>
								</a>
							</div>
							<div class="text px-4">
								<h3><a href="#">Nombre de la sección</a></h3>
								<span>Descripción</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="project">
							<div class="img">
								<img src="/web/images/project-3.jpg" class="img-fluid" alt="Colorlib Template">
								<a href="/web/images/project-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
									<span class="icon-expand"></span>
								</a>
							</div>
							<div class="text px-4">
								<h3><a href="#">Nombre de la sección</a></h3>
								<span>Descripción</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="project">
							<div class="img">
								<img src="/web/images/project-4.jpg" class="img-fluid" alt="Colorlib Template">
								<a href="/web/images/project-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
									<span class="icon-expand"></span>
								</a>
							</div>
							<div class="text px-4">
								<h3><a href="#">Nombre de la sección</a></h3>
								<span>Descripción</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="project">
							<div class="img">
								<img src="/web/images/project-5.jpg" class="img-fluid" alt="Colorlib Template">
								<a href="/web/images/project-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
									<span class="icon-expand"></span>
								</a>
							</div>
							<div class="text px-4">
								<h3><a href="#">Nombre de la sección</a></h3>
								<span>Descripción</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="project">
							<div class="img">
								<img src="/web/images/project-6.jpg" class="img-fluid" alt="Colorlib Template">
								<a href="/web/images/project-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
									<span class="icon-expand"></span>
								</a>
							</div>
							<div class="text px-4">
								<h3><a href="#">Nombre de la sección</a></h3>
								<span>Descripción</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center pb-5 mt-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<a href="{{ route('purchase') }}"><button class="text-center btn btn-primary py-3 px-5 mr-2"> Comprar <span class="ion-ios-cart"></span></button></a><a href="{{ route('rental') }}"><button class="text-center btn btn-success py-3 px-5"> Alquilar <span class="ion-ios-cart"></span></button></a>
			</div>
		</div>

		<div class="row d-flex contact-info">
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Info</h3>
	            <p>Descripcion</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Info</h3>
	            <p>Descripcion</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Info</h3>
	            <p>Descripcion</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Info</h3>
	            <p>Descripcion</p>
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