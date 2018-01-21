<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Francisco Gacitúa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        {!! Html::style('css/welcome.css') !!}
        {!! Html::style('css/bootstrap.min.css') !!}
        {!! Html::style('css/bootstrap-grid.min.css') !!}
        {{ Html::favicon( '/img/favicon.png' ) }}
        {!! Html::style('css/admin.css') !!}
        {!! Html::style('css/main.css') !!}
    <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>



    </head>
    <body class="welcome">
        <div class="container">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/admin') }}">Admin</a>
                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </div>
                    @else
                        <a href="{{ url('/admin') }}"><i class="fas fa-sign-in-alt" ></i>  Login</a>
                       {{--  <a href="{{ route('register') }}">Register</a> --}}
                    @endauth
                </div>
            @endif

            <div class="container text-center">
                <div class="title">
                    <h1 class="nomargin">Francisco Gacitúa Maturana</h1>
                    <h2 class="nomargin">Ingeniero Civil Informático</h2>
                </div>


                <div class="row">
                     <div class="personal col-md-12">

                        <ul>
                            <li><i class="fas fa-envelope" aria-hidden="true"></i>   contacto@fgacitua.cl</li>
                            <li><i class="fab fa-whatsapp" aria-hidden="true"></i>   +56973712292</li>
                        </ul>
                
                    </div>
                    <div class="redes col-md-12">
                        <ul class="">
                            <div class="fa-2x">
                                <li><a href="https://www.facebook.com/Pamshoo">
                                    <i class="fab fa-facebook-square" ></i>
                                </a></li>
                                <li><a href="https://www.linkedin.com/in/francisco-gacit%C3%BAa-maturana-353b45a3/">
                                    <i class="fab fa-linkedin" ></i>
                                </a></li>
                                <li><a href="https://github.com/fcogacituam/">
                                    <i class="fab fa-github-square" ></i>
                                </a></li>
                                <li><a href="https://www.instagram.com/fcogacituam/" >
                                    <i class="fab fa-instagram" ></i>
                                </a></li>
                            </div>
                        </ul>
                    </div>

                    <div class="col-md-6 contacto">
                       <h1> <span>Contáctame</span></h1>
                        {!!Form::open(['route'=>['contacto.store'],'method'=>'POST'])!!}
                            @include('includes.contacto')
                        {!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!}
                        {!!Form::close()!!}
                    </div>
                    <div class="col-md-6 cv">
                        <h1> <span>Descargar CV</span></h1>
                        <a href="/cv_v2.doc" download><img src="img/cv.png"></a>
                    </div>

                </div>

           
                
            </div>
 
            
        </div>


<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    {!! Html::script('js/jquery.js') !!}
{!! Html::script('js/jquery1-12.js') !!}
{!! Html::script('js/bootstrap.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/welcome.js') !!}
{{-- {!! Html::script('js/admin.js') !!} --}}
    </body>
</html>
