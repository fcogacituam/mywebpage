<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Smite Chile</title>
	{!! Html::style('style.css') !!}
	{!! Html::style('css/bootstrap.css') !!}
	{!! Html::style('css/bootstrap.min.css') !!}
	{!! Html::style('css/admin.css') !!}
	{!! Html::style('css/main.css') !!}
	<script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
</head>

<body class="admin">
    <div class="container-fluid" style="height:100%;padding-left:0;margin-left:0;">
            <div class="row" style="height:100%">
            	<div class="col-md-2" id="dashboard">
        <div class="nav-side-menu" style="">
            <div class="brand"><img src="../../img/logo.png" alt=""></div>
            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
            <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li class="menu-admin menu-inicio">
                	<a href="{!! URL::to('/admin') !!}"><i class="fa fa-home fa-lg"></i> Inicio</a>
                </li>
            	
            	<!-- USUARIOS  agregar class .active-->
               <li  data-toggle="collapse" data-target="#usuarios" id="admin_usuario" class="collapsed">
                    <a href="#"><i class="fa fa-user fa-lg"></i> Usuarios <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="usuarios">
                    <li class="usuarios-todos"><a href="{!! URL::to('/admin/users') !!}">Ver usuarios</a></li>
                    <li class="usuarios-crear"><a href="{!! URL::to('/admin/users/create') !!}">Agregar usuario</a></li>     
                </ul>
                              

            	<!-- NOTICIAS -->
                <li data-toggle="collapse" data-target="#noticias" id="admin_noticias" class="collapsed">
                    <a href="#"><i class="fa fa-newspaper-o fa-lg"></i> Noticias <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="noticias">
                    <li class="noticias-todas"><a href="{!! URL::to('/admin/noticias') !!}">Ver Todas las noticia</a></li> 
                    <li class="noticias-crear"><a href="{!! URL::to('/admin/noticias/create') !!}">Nueva noticia</a></li>
                
                </ul>

                <!-- Categorias -->
                <li data-toggle="collapse" data-target="#categ" class="collapsed" id="admin_categorias">
                    <a href="{!! URL::to('/admin/categorias') !!}"><i class="fa fa-bars" aria-hidden="true"></i> Categorias </a>
                </li>
                
                <li id="admin_profile">
                    <a href="{!! URL::to('/admin/profile') !!}"><i class="fa fa-user fa-lg"></i> Profile </a>
                </li>

                <li id="admin_textos">
                    <a href="{!! URL::to('/admin/textos') !!}"><i class="fa fa-font" aria-hidden="true"></i> Textos </a>
                </li>
            </ul>
            </div>
        </div>
    				</div>
            				
            	<div class="col-md-10">
            	    <div class="row">
            	        <header>
            	            <div class="col-md-7">
            	                @yield('title')
            	            </div>
            	            <div class="col-md-5">
            	                <div class="">
            	                    <h4>Bienvenido {!! Auth::user()->name !!}</h4>
                                      <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
            	                </div>
            	            </div>
            	        </header>
            	    </div>
            	    <div class="row">
            	    	@yield('alert')
            	    </div>
            	    <div class="user-dashboard">
            	    	@yield('content')
            	    </div>
            	</div>
            </div>
   	</div>



   

<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
{!! Html::script('js/jquery.js') !!}
{!! Html::script('js/jquery1-12.js') !!}
{!! Html::script('js/bootstrap.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/admin.js') !!}



</body>
</html>