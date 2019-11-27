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