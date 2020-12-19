<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="profile-info">
            <figure class="user-cover-image"></figure>
            <div class="user-info">
                <img src="{{ asset('/web/images/logo.png') }}" width="90" height="90" alt="logo">
                <h6 class="">Cuidamos de tu Casa</h6>
                <p class="">Sistema de Gestión</p>
            </div>
        </div>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu {{ active('admin') }}">
                <a href="{{ route('admin') }}" aria-expanded="{{ menu_expanded('admin') }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span> Inicio</span>
                    </div>
                </a>
            </li>

            @if(Auth::user()->type=="1")
            <li class="menu {{ active('admin/administradores', 0) }}">
                <a href="{{ route('administradores.index') }}" aria-expanded="{{ menu_expanded('admin/administradores', 0) }}" class="dropdown-toggle">
                    <div class="">
                        <span><i class="fa fa-user-tie"></i> Administradores</span>
                    </div>
                </a>
            </li>
            @endif

            <li class="menu {{ active('admin/usuarios', 0) }}">
                <a href="{{ route('usuarios.index') }}" aria-expanded="{{ menu_expanded('admin/usuarios', 0) }}" class="dropdown-toggle">
                    <div class="">
                        <span><i class="fa fa-user"></i> Usuarios</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ active('admin/vivienda', 0) }}">
                <a href="#gallery" data-toggle="collapse" aria-expanded="{{ menu_expanded('admin/vivienda', 0) }}" class="dropdown-toggle">
                    <div class="">
                        <span><i class="fa fa-building"></i> Viviendas</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ submenu('admin/vivienda', 0) }} }}" id="gallery" data-parent="#accordionExample">
                    <li {{ submenu('admin/vivienda/venta') }}>
                        <a href="#"> Venta</a>
                    </li>
                    <li {{ submenu('admin/vivienda/alquiler') }}>
                        <a href="#"> Alquiler</a>
                    </li>                           
                </ul>
            </li>

            <li class="menu {{ active('admin/servicios', 0) }}">
                <a href="{{ route('servicios.index') }}" aria-expanded="{{ menu_expanded('admin/servicios', 0) }}" class="dropdown-toggle">
                    <div class="">
                        <span><i class="fa fa-briefcase"></i> Servicios</span>
                    </div>
                </a>
            </li>

            <li class="menu {{ active('admin/pagos', 0) }}">
                <a href="{{ route('pagos.index') }}" aria-expanded="{{ menu_expanded('admin/pagos', 0) }}" class="dropdown-toggle">
                    <div class="">
                        <span><i class="fa fa-credit-card"></i> Pagos</span>
                    </div>
                </a>
            </li>

             <li class="menu {{ active('admin/ajustes', 0) }}">
                <a href="#setting" data-toggle="collapse" aria-expanded="{{ menu_expanded('admin/ajustes', 0) }}" class="dropdown-toggle">
                    <div class="">
                        <span><i class="fa fa-cogs"></i> Ajustes</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ submenu('admin/ajustes', 0) }} }}" id="setting" data-parent="#accordionExample">
                    <li {{ submenu('admin/ajustes/categoria') }}>
                        <a href="{{ route('categorias.index') }}"> Categorías</a>
                    </li>
                    <li {{ submenu('admin/ajustes/provincia') }}>
                        <a href="{{ route('provincias.index') }}"> Provincias</a>
                    </li>   
                    <li {{ submenu('admin/ajustes/ciudad') }}>
                        <a href="{{ route('ciudades.index') }}"> Ciudades</a>
                    </li>
                    <li {{ submenu('admin/ajustes/contrato') }}>
                        <a href="{{ route('contratos.index') }}"> Contratos</a>
                    </li>   
                    <li {{ submenu('admin/ajustes/piscina') }}>
                        <a href="{{ route('piscinas.index') }}"> Piscinas</a>
                    </li>
                    <li {{ submenu('admin/ajustes/compañia') }}>
                        <a href="{{ route('companias.index') }}"> Compañias</a>
                    </li> 
                    <li {{ submenu('admin/ajustes/empresa') }}>
                        <a href="{{ route('empresas.index') }}"> Empresas</a>
                    </li>   
                    <li {{ submenu('admin/ajustes/web') }}>
                        <a href="{{ route('secciones.index') }}"> Secciones de la web</a>
                    </li>                          
                </ul>
            </li>

           
        </ul>

    </nav>

</div>