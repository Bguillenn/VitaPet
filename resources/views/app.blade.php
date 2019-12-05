<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('general.appname')}}</title>
    <link href="{{ URL::asset('assets/css/app.css') }}" rel="stylesheet"></link>
    <script src="https://kit.fontawesome.com/4e69c67bb3.js" crossorigin="anonymous"></script>

<!-- Necesario para reports-->
 <script src="https://cdn.anychart.com/releases/8.7.0/js/anychart-base.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4">
</script>
<script src="https://cdn.anychart.com/releases/8.7.0/js/anychart-sunburst.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4">
</script>
<script src="https://cdn.anychart.com/releases/8.7.0/js/anychart-exports.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
<script src="https://cdn.anychart.com/releases/8.7.0/js/anychart-ui.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4">
</script>


</head>
<body>
    <div id="side-bar">
        <div id="top-elements">
            <a href="#" class="side-btn">
                <i class="fas fa-home side-btn-icon"></i>
                <span class="side-btn-text">Principal</span>
            </a>
            <a href="#" class="side-btn">
                <i class="fas fa-paw side-btn-icon"></i>
                <span class="side-btn-text">Tus mascotas</span>
            </a>
            <a href="#" class="side-btn">
                <i class="fas fa-clinic-medical side-btn-icon"></i>
                <side class="side-btn-text">Veterinarias</side>
            </a>
            <a href="#" class="side-btn">
                <i class="fas fa-newspaper side-btn-icon"></i>
                <span class="side-btn-text">Novedades</span>
            </a>
            <a href="#" class="side-btn">
                <i class="fas fa-cut side-btn-icon"></i>
                <span class="side-btn-text">Moda animal</span>
            </a>
        </div>
        <div id="bottom-element">
            <a href="#" class="side-btn">
                <i class="fas fa-info-circle side-btn-icon"></i>
                    <span class="side-btn-text">Info</span>
                </a>
        </div>
    </div>
    <div id="rigth-pane">
        <div id="top-bar">
            <img src="{{URL::asset('assets/img/landing-page/logotipo.png')}}" alt="{{__('general.logo-alt')}}" width="100px">
            <div id="account-options">
                <div id="language-select">
                    <button id="language-button">
                        <img src="{{ URL::asset('assets/img/app/es.svg') }}" alt="AÑADIR A TRADUCCIONES" width="20px">
                        <span>ES</span>
                        <i class="fas fa-angle-down"></i>
                    </button>
                    <div id="language-options">
                        <a href="#">
                            <img src="{{ URL::asset('assets/img/app/en.svg') }}" alt="AÑADIR A TRADUCCIONES" width="20px">
                            EN
                        </a>
                        <a href="#">
                            <img src="{{ URL::asset('assets/img/app/pt.svg') }}" alt="AÑADIR A TRADUCCIONES" width="20px">
                            PT
                        </a>
                    </div>
                </div>
                <div id="profile-select">
                    <button id="profile-button">
                        <span>Name</span>
                        <img src="{{ URL::asset('assets/img/app/default-profile.png') }}" alt="AÑADIR A TRADUCCIONES" width="35px">
                        <i class="fas fa-angle-down"></i>
                    </button>
                    <div id="profile-options">
                        <div id="profile-data">
                            <img src="{{ URL::asset('assets/img/app/default-profile.png') }}" alt="AÑADIR A TRADUCCIONES" width="100px">
                            <span> 
                                <i class="fas fa-circle color-green"></i>
                                Tu nombre
                            </span>
                        </div>
                        
                        <a href="#">
                            <span>
                                <i class="fas fa-user"></i>
                                Tu perfil
                            </span>
                            <i class="fas fa-angle-right"></i>
                        </a>
                        <a h-ref="#">
                            <span>
                                <i class="fas fa-cog"></i>
                                Configuracion
                            </span>
                            <i class="fas fa-angle-right"></i>
                        </a>
                        <a href="#">
                            <span>
                                <i class="fas fa-people-carry"></i>
                                Soporte
                            </span>
                            <i class="fas fa-angle-right"></i>
                        </a>
                            </hr>
                        <a href="#" class="color-red">
                            <span>
                                <i class="fas fa-door-open"></i>
                                Salir
                            </span>
                            <i class="fas fa-angle-right"></i>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            @yield('content')
        </div>
    </div>
</body>

<script src=" {{URL::asset('assets/js/app.js')}}">
</script>
</html>