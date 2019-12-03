@extends('layouts.app')

@section('content')
    <link href="{{ URL::asset('assets/css/reports-page/style.css') }}" rel="stylesheet"></link>
    <script src=" {{URL::asset('assets/js/reports-page/reporte-es.js')}}"></script>
    <script src=" {{URL::asset('assets/js/reports-page/reporte-en.js')}}"></script>
    <script src=" {{URL::asset('assets/js/reports-page/reporte-pt.js')}}"></script>

        <section></section>
          <ul class="VITAPET">
              <li>V</li>
            <li>I</li>
            <li>T</li>
            <li>A</li>
            <li>P</li>
            <li>E</li>
            <li>T</li>
            </ul>
          <div class="animation-area">
            <ul class="box-area">
              <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            </ul>
          </div>
        <div id="container">
            <div id="cajaBoton">
                <button id="boton" onclick="draw2()"> Ver</button>   
            </div>
        </div>
        </div>
        
@endsection