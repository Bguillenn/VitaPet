@extends('app')

@section('content')

        <link href="{{ URL::asset('assets/css/reports-page/style.css') }}" rel="stylesheet"></link>
        
        <script src=" {{URL::asset('assets/js/reports-page/report-'.App::getLocale().'.js')}}"></script>
         
        <div class="content-pane">
                <h3>{{__('reports.title-report')}}</h3>
                        <hr>
                <p>{{__('reports.subtitle-report', ['vet' => 'Veterinaria San Juan'])}}</p>
                <div id="dibujo">

                </div>
                <div id="dibujo2">

                </div>
        </div>

       
          
@endsection