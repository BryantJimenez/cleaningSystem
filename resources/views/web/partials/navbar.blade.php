<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ route('home') }}"><img style="width: 170px; height:80px;" src="/web/images/logo.png"></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" >
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="{{ route('home') }}" class="nav-link"><span>Inicio</span></a></li>
	          @guest
	          <li class="nav-item cta"><a href="#" class="nav-link">
	          ¡Bienvenido!
	      	  </a>
	      	  <li class="nav-item"><a href="{{ route('services') }}" class="nav-link" ><span>Servicios</span></a></li>
		      <li class="nav-item"><a href="{{ route('households') }}" class="nav-link" ><span>Viviendas</span></a></li>
	          @else
	          <li class="nav-item"><a href="{{ route('my.households')}}" class="nav-link" ><span>Mis Viviendas</span></a></li>
	          <li class="nav-item"><a href="{{ route('my.payments')}}" class="nav-link" ><span>Mis Pagos</span></a></li>
	          <li class="nav-item cta"><a href="#" class="nav-link">
	          {{ Auth::user()->name." ".Auth::user()->lastname }}
	      	  </a>
	      	  @endguest
	      	</li>
	          {{-- <li class="nav-item cta"><a href="#" class="nav-link"><span class="ion-ios-cart"></span></a></li>
 --}}
	        </ul>
	      </div>
	    </div>
	  </nav>