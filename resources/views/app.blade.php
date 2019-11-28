<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('general.appname')}}</title>
    <link href="{{ URL::asset('assets/css/app.css') }}" rel="stylesheet"></link>
    <script src="https://kit.fontawesome.com/4e69c67bb3.js" crossorigin="anonymous"></script>
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
                        <a href="#">ES</a>
                        <a href="#">EN</a>
                        <a href="#">PT</a>
                    </div>
                </div>
                <div id="profile-select">
                
                </div>
            </div>
        </div>
        <div id="content">
            @yield('content')
        </div>
    </div>
</body>
</html>