@extends('layouts.main')

@section('content')
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="fixed-position">
            <div class="button-tahun button-wrapper">
                <a href="#" class=""><i class="fa fa-youtube-play"></i></a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    FISIKA
                </li>
                <li>
                    <a href="">tahun 2000</a>
                </li>
                <li>
                    <a href="#">tahun 2001</a>
                </li>
                <?php
                for ($i=0; $i < 100; $i++) {
                ?>
                <li>
                    <a href="#">tahun 2002</a>
                </li>
                <?php
                 } ?>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Sidebar right-->
        <div id="sidebar-wrapper-right" class="fixed-position">
            <div class="button-tahun button-wrapper-right">
                <a href="#" class=""><i class="fa fa-youtube-play"></i></a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    Tahun Matematika
                </li>
                <li>
                    <a href="">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>



            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box intro-section">
                            <div class="box-header">Pendahuluan</div>
                            <div class="box-body">
                              <center>
                                  <div class="videowrapper ">
                                      <iframe width="560" height="315" src="https://www.youtube.com/embed/QSiNWEsZGRI" frameborder="0" allowfullscreen></iframe>
                                  </div>
                              </center>
                            </div>
                            <div class="box-footer"></div>
                        </div>
                        <div class="box intro-section">
                            <div class="box-header">BESARAN</div>
                            <div class="box-body">
                              <center>
                                  <div class="videowrapper ">
                                    <h2>Silahkan <a href="{{ route('auth.login') }}">Log In</a> untuk melihat Video Tutorial ini</h2>
                                  </div>
                              </center>
                            </div>
                            <div class="box-footer"></div>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-lg-12">
                                <h2>Silahkan <a href="{{ route('auth.login') }}">Log In</a> untuk melihat Video Tutorial ini</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="margin: 50px 0 0 75px">
                      <iframe width="560" height="355" src="#" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->



</div>
    <!-- /#wrapper -->
    @stop
