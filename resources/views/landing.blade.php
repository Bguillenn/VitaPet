<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('general.appname')}}</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/landing-page/style.css') }}" />
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{URL::asset('assets/img/landing-page/logotipo.png')}}" alt="{{__('general.logo-alt')}}" width="200px">
            
            
           <!-- 
            <div class="content-language">
                <ul class="language-change">
                    <li class="nav-item">
                        <a class="nav-link" href="locale/en">
                        <img src="{{ URL::asset('assets/img/app/en.svg') }}" alt="AÑADIR A TRADUCCIONES" width="20px">
                        English</a>
                        <i class="fas fa-angle-down"></i>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="locale/es">
                        <img src="{{ URL::asset('assets/img/app/es.svg') }}" alt="AÑADIR A TRADUCCIONES" width="20px">
                        Español</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="locale/pt">
                        <img src="{{ URL::asset('assets/img/app/pt.svg') }}" alt="AÑADIR A TRADUCCIONES" width="20px">
                        Portugues</a>
                    </li>
                </ul>
            </div>
            Esto yo le agregue-->
            
            <div class="header-buttons"> 
                <a href="#" class="btn btn-ligth">{{__('landing.header-btnus')}}</a>
                <a href="#" class="btn btn-ligth">{{__('landing.header-btncontact')}}</a>
                <a href="{{route('general.auth')}}" class="btn btn-green">{{__('landing.header-btnauth')}}</a>
            </div>
        </div>
        <div class="content-pane">
            <div class="content-message font-lato">
                <p>{!!__('landing.content-message')!!}</p>
            </div>
            <a href="{{route('general.auth')}}" class="btn btn-green">{{__('landing.content-btnstart')}}</a>
        </div>
    </div>
</body>
</html>