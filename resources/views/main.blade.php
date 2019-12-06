@extends('app')

@section('content')
    <link href="{{URL::asset('assets/css/main-page/style.css')}}" rel="stylesheet"/>
    <div class="content-pane">
        <h1>{{__('dashboard.title-pets')}}</h1>
        <p>{{__('dashboard.subtitle-pets')}}</p>
        <div class="pet-cards">
            <div class="pet-card">
                <div class="pet-card-image">
                    <img src="{{URL::asset('assets/img/main-page/firulais.jpg')}}" alt="TRADUCCIONES">
                </div>
                <div class="pet-card-name">
                    <i class="fas fa-dog"></i><span>Firulais</span>
                </div>
            </div>
            <div class="pet-card">
                <div class="pet-card-image">
                    <img src="{{URL::asset('assets/img/main-page/michi.jpg')}}" alt="TRADUCCIONES">
                </div>
                <div class="pet-card-name">
                    <i class="fas fa-dog"></i><span>Michi</span>
                </div>
            </div>
            <div class="pet-card">
                <div class="pet-card-image">
                    <img src="{{URL::asset('assets/img/main-page/piolin.jpg')}}" alt="TRADUCCIONES">
                </div>
                <div class="pet-card-name">
                    <i class="fas fa-dove"></i><span>Piolin</span>
                </div>
            </div>
            <div class="pet-card">
                <div class="pet-card-image">
                    <img src="{{URL::asset('assets/img/main-page/bob.jpg')}}" alt="TRADUCCIONES">
                </div>
                <div class="pet-card-name">
                    <i class="fas fa-dog"></i><span>Bob</span>
                </div>
            </div>
            
            
        </div>
        <h1>{{__('dashboard.title-news')}}</h1>
        <div class="news">
            <div class="new-card">
                <div class="new-header">
                    <span class="new-user">User Name</span>
                    <span class="new-date">
                    {{__('dashboard.post-hour',['min' => '15'])}}
                    </span>

                </div>
                <div class="new-content">
                    <p class="new-text">Campaña de esterilizancion el proximo 1 de enero, registrate antes del 25 de deciembre !</p>
                    <img src="https://picsum.photos/814/405" alt="">
                </div>
                <div class="new-comments">
                    
                    
                </div>
            </div>

        </div>
    </div>
@endsection