<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>

	{{-- MAPA --}}
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

	<link href="{{ asset('/web/css/open-iconic-bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/web/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('/web/css/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/web/css/owl.theme.default.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/web/css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('/web/css/aos.css') }}" rel="stylesheet">
	<link href="{{ asset('/web/css/ionicons.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/web/css/flaticon.css') }}" rel="stylesheet">
	<link href="{{ asset('/web/css/icomoon.css') }}" rel="stylesheet">
	{{-- <link rel="stylesheet" href="{{ asset('/web/css/font-awesome.min.css') }}"> --}}
	{{-- <link href="{{ asset('/web/css/bootstrap.css') }}" rel="stylesheet"> --}}
	
	@yield('links')

	<!-- Style CSS -->
	<link href="{{ asset('/web/css/style.css') }}" rel="stylesheet">
	<!-- Style CSS -->

</head>
<body>

	@include('web.partials.navbar')

	@yield('content')

	@include('web.partials.footer')
	
	@include('web.partials.loader')

	<!-- JQuery -->
	<script type="text/javascript" src="{{ asset('/web/js/jquery-3.4.1.min.js') }}"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="{{ asset('/web/js/popper.min.js') }}"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="{{ asset('/web/js/bootstrap.min.js') }}"></script>

	@yield('scripts')

	<!-- Scripts -->
	<script src="{{ asset('/web/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/web/js/jquery-migrate-3.0.1.min.js') }}"></script>
	<script src="{{ asset('/web/js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('/web/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('/web/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('/web/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('/web/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('/web/js/aos.js') }}"></script>
	<script src="{{ asset('/web/js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('/web/js/scrollax.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="{{ asset('/web/js/google-map.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/web/js/main.js') }}"></script>

	@include('admin.partials.notifications')
	

</body>
</html>