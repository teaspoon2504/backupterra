@extends('layouts.main')

@section('content')


<!--    carousel-->
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">

  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner pas">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h2>Ingin Lolos SBMPTN?</h2>
            <h3>Lorem ipsum dolor sit amet, donec aenean rhoncus urna</h3>
        </hgroup>
        <button class="btn btn-warning btn-lg" role="button">Daftar</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">
        <hgroup>
            <h2>Belajar dengan cara baru</h2>
            <h3>Lorem ipsum dolor sit amet, donec aenean rhoncus urna</h3>
        </hgroup>
        <button class="btn btn-warning btn-lg" role="button">Daftar</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">
        <hgroup>
            <h2>We are amazing</h2>
            <h3>Lorem ipsum dolor sit amet, donec aenean rhoncus urna</h3>
        </hgroup>
        <button class="btn btn-warning btn-lg" role="button">Daftar</button>
      </div>
    </div>
  </div>
</div>




<div class="section service">
  <div class="container">
    <div class="row">

      <!-- Start Service Icon 1 -->
      <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
        <div class="service-icon">
          <i class="fa fa-leaf icon-large"></i>
        </div>
        <div class="service-content">
          <h4>Lorem Ipsum</h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>

        </div>
      </div>
      <!-- End Service Icon 1 -->

      <!-- Start Service Icon 2 -->
      <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
        <div class="service-icon">
          <i class="fa fa-desktop icon-large"></i>
        </div>
        <div class="service-content">
          <h4>Lorem Ipsum</h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
        </div>
      </div>
      <!-- End Service Icon 2 -->

      <!-- Start Service Icon 3 -->
      <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="03">
        <div class="service-icon">
          <i class="fa fa-eye icon-large"></i>
        </div>
        <div class="service-content">
          <h4>Lorem Ipsum</h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
        </div>
      </div>
      <!-- End Service Icon 3 -->

      <!-- Start Service Icon 4 -->
      <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="04">
        <div class="service-icon">
          <i class="fa fa-code icon-large"></i>
        </div>
        <div class="service-content">
          <h4>Lorem Ipsum</h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
        </div>
      </div>
      <!-- End Service Icon 4 -->

    </div>
  </div>
</div>
<hr class="divider"/>

<div class="container">
  <div class="row">
    <div class='col-md-offset-2 col-md-8 text-center'>
  <h3>Testimonial</h3>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>

        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">

          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="/assets/images/testi(1).jpg" style="width: 100px;height:100px;">
                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                </div>
                <div class="col-sm-9">
                  <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                  <small> <strong>Kukuh Setyo Raharjo</strong>&nbsp;Teknik Elektro UGM</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="/assets/images/testi(2).jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                  <small><strong>Mu'tasim Billah</strong>&nbsp;Teknik Industri Undip</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="/assets/images/testi(3).jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                  <small><strong>Ramadhan Galih Wibisono</strong>&nbsp;Teknik Mesin UGM</small>
                </div>
              </div>
            </blockquote>
          </div>
        </div>

        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      </div>
    </div>
  </div>




   <div class="container harga">
     <div class="row">
       <div class="text-center">
 <h2><strong>Upgrade ke Premium</strong></h2>
       </div>

     </div>
       <div class="row ">
           <div class="col-xs-12 matematikaIpacol-sm-6 col-md-6 col-lg-6">
               <div class="db-wrapper">
                   <div class="db-pricing-seven">
                       <ul>
                           <li class="price">
                               <i class="glyphicon glyphicon-qrcode"></i>
                               Biasa
                           </li>

                           <li>Lorem Ipsum</li>
                           <li>Lorem Ipsum</li>
                           <li>Lorem Ipsum</li>
                           <li>Lorem Ipsum</li>
                       </ul>
                       <div class="pricing-footer">
                           <a href="#" class="btn btn-default btn-lg">BUY <i class="glyphicon glyphicon-play-circle"></i></a>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-xs-12 matematikaIpacol-sm-6 col-md-6 col-lg-6">
               <div class="db-wrapper">
                   <div class="db-pricing-seven">
                       <ul>
                           <li class="price">
                               <i class="glyphicon glyphicon-indent-right"></i>
                               Sedang
                           </li>
                           <li>Lorem Ipsum</li>
                           <li>Lorem Ipsum</li>
                           <li>Lorem Ipsum</li>
                           <li>Lorem Ipsum</li>
                       </ul>
                       <div class="pricing-footer">
                           <a href="#" class="btn btn-default btn-lg">BUY<i class="glyphicon glyphicon-play-circle"></i></a>
                       </div>
                   </div>
               </div>
           </div>


       </div>
       </div>

<footer id="footerWrapper">

    <div class="container">
      <div class="row">
        <div class="container text-center">
            <hr />
                  <div class="row">

                      <div class="col-md-2 border-right">
                        <ul class="nav nav-pills nav-stacked">
                          <li><a href="#">Bantuan</a></li>
                          <li><a href="#">FAQ</a></li>
                          <li><a href="#">Tentang Kami</a></li>
                          <li><a href="#">Hubungi Kami</a></li>
                        </ul>
                      </div>
                      <div class="col-md-10">
                        <div class="text-center center-block margin-footer">
                        <h3>TERRAVERSITY</h3>
                          <p>terraversity adalah sebuah platform di mana kamu bisa belajar dan mempersiapkan tes SBMPTN dan UM-PTN berupa video pembahasan-soal.</p>
                                dapatkan info baru tentang kami di:
                        </div>
                        <div class="text-center center-block">
                                <a href="https://www.facebook.com/terraversity"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                                <a href="https://twitter.com/terraversityp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                                <a href="https://plus.google.com/+terraversityp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                                <!-- <a href="mailto:terraversityp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a> -->
                        </div>
                      </div>

                  </div>
        </div>
      </div>

    <section id="footerRights">
      <div class="container">
        <div class="row">
            <hr >
          <div class="text-center center-block">
            <p> created by <a href="http://www.terraversity.com" target="blank">Terraversity</a> 2016 </p>
          </div>

        </div>
      </div>
    </section>
</footer>


@stop
