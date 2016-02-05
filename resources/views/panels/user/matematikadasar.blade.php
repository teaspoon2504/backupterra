@extends('layouts.main')

@section('head')

@stop

@section('content')


<div id="wrapper" class="pluz">

        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    Matematika
                </li>
                <li>
                    <a href="#">tahun 2000</a>
                </li>
                <li>
                    <a href="#">tahun 2001</a>
                </li>
                <li>
                    <a href="#">tahun 2002</a>
                </li>

            </ul>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/-JJjnrcyXco" frameborder="0" allowfullscreen></iframe>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                            <h2>Ordinary User Panel Home Page</h2>

                        @if(!Auth::check())

                               selamat datang {{Auth::user()->first_name}}
                               <img src="{{Auth::user()->profile_picture}}">
                        @endif


                        @if (!Auth::user()->subscribed == 0)
                         <p style="color: #3e4095">BOLEH LIAT</p>
                         Konten super rahasia

                      <iframe width="560" height="315" src="https://www.youtube.com/embed/L5-ML_RaVD8" frameborder="0" allowfullscreen></iframe>


                        @else
                        <p>gak boleh liat VIDEO</p>
                        @endif
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-4">
                            <h2>Ordinary User Panel Home Page</h2>
                        @if(!Auth::check())
                               selamat datang {{Auth::user()->first_name}}
                               <img src="{{Auth::user()->profile_picture}}">
                        @endif
                        @if (!Auth::user()->subscribed == 0)
                         <p style="color: #3e4095">BOLEH LIAT</p>
                         Konten super rahasia
                      <iframe width="560" height="315" src="#" frameborder="0" allowfullscreen></iframe>
                        @else
                        <p>gak boleh liat VIDEO</p>
                        @endif
                    </div>
                    <div class="col-md-4 col-lg-4">
                        
                    </div>
                </div>
        </div>
        </div>
</div>


@section('footer')


@stop
