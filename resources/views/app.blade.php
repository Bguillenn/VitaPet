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
            <a href="{{route('dashboard')}}" class="side-btn">
                <i class="fas fa-home side-btn-icon"></i>
                <span class="side-btn-text">{{__('general.side-main')}}</span>
            </a>
            <a href="#" class="side-btn">
                <i class="fas fa-paw side-btn-icon"></i>
                <span class="side-btn-text">{{__('general.side-pets')}}</span>
            </a>
            <a href="#" class="side-btn">
                <i class="fas fa-clinic-medical side-btn-icon"></i>
                <side class="side-btn-text">{{__('general.side-vets')}}</side>
            </a>
            <a href="{{route('reports.index')}}" class="side-btn">
                <i class="fas fa-newspaper side-btn-icon"></i>
                <span class="side-btn-text">{{__('general.side-news')}}</span>
            </a>
            <a href="#" class="side-btn">
                <i class="fas fa-cut side-btn-icon"></i>
                <span class="side-btn-text">{{__('general.side-mode')}}</span>
            </a>
        </div>
        <div id="bottom-element">
            <a href="#" class="side-btn">
                <i class="fas fa-info-circle side-btn-icon"></i>
                    <span class="side-btn-text">{{__('general.side-info')}}</span>
                </a>
        </div>
    </div>
    <div id="rigth-pane">
        <div id="top-bar">
            <img src="{{URL::asset('assets/img/landing-page/logotipo.png')}}" alt="{{__('general.logo-alt')}}" width="100px">
            <div id="account-options">
                <div id="language-select">
                    <button id="language-button">
                        <img src="{{ URL::asset('assets/img/app/'.App::getLocale().'.svg') }}" alt="AÑADIR A TRADUCCIONES" width="20px">
                        <span>{{App::getLocale()}}</span>
                        <i class="fas fa-angle-down"></i>
                    </button>
                    <div id="language-options">
                        @foreach(Config::get('app.locales') as $language)
                            @if($language != App::getLocale())
                                <a href="{{route('locale',['locale' => $language])}}">
                                    <img src="{{ URL::asset('assets/img/app/'.$language.'.svg') }}" alt="AÑADIR A TRADUCCIONES" width="20px">
                                    {{$language}}
                                </a>
                            @endif
                        @endforeach 
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
                                User name
                            </span>
                        </div>
                        
                        <a href="#">
                            <span>
                                <i class="fas fa-user"></i>
                                {{__('general.optionsP-profile')}}
                            </span>
                            <i class="fas fa-angle-right"></i>
                        </a>
                        <a h-ref="#">
                            <span>
                                <i class="fas fa-cog"></i>
                                {{__('general.optionsP-config')}}
                            </span>
                            <i class="fas fa-angle-right"></i>
                        </a>
                        <a href="#">
                            <span>
                                <i class="fas fa-people-carry"></i>
                                {{__('general.optionsP-supp')}}
                            </span>
                            <i class="fas fa-angle-right"></i>
                        </a>
                            </hr>
                        <a href="{{route('general.auth')}}" class="color-red">
                            <span>
                                <i class="fas fa-door-open"></i>
                                {{__('general.optionsP-exit')}}
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