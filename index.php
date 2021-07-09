<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Ricardo Paolini</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand" style="color: white;">RicPaolini<span style='font-size:100%;'>&#9734;</span> </a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="#inicio">inicio</a></li>
                                    <li><a href="#videos">Videos</a></li>
                                    <li><a href="#presentacion">Conóceme</a></li>
                                    <li><a href="#musicao">Música original</a></li>
                                    <li><a href="#contacto">Contacto</a></li>
                                </ul>


                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area" id="inicio">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/ric-serio-bn.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Músico</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Ricardo Paolini<span>Ricardo Paolini</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="https://www.youtube.com/channel/UCz58kiBd96KUUpi47qD-TbQ" target="_blank" class="btn oneMusic-btn mt-50">Explorar<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/ric-color.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">

                                <h2 data-animation="fadeInUp" data-delay="300ms">Nueva Música <span>Nueva Música</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="https://www.youtube.com/channel/UCz58kiBd96KUUpi47qD-TbQ" target="_blank" class="btn oneMusic-btn mt-50">Explorar<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Latest Albums Area Start ##### -->
    <section class="latest-albums-area section-padding-100" id="videos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                      <div class="section-heading style-2">
                          <p>Vea lo nuevo</p>
                          <h2>Últimos Videos</h2>

                      </div>
                  </div>
              </div>
              <div class="row justify-content-center">

                  <div class="btn-group col-lg-8" role="group" aria-label="Carousel controls">
                      <button id="prevMovie" type="button" class="btn btn-secondary">Prev</button>
                      <button id="nextMovie" type="button" class="btn btn-dark">Next</button>
                  </div>

                  <!-- The carousel containing the Youtube iframe videos -->
                  <!-- Remember to add the ?enablejsapi=1 in the Youtube embed link as described in: -->
                  <!-- https://developers.google.com/youtube/iframe_api_reference#Example_Video_Player_Constructors -->
                  <div id="moviesCarousel" class="carousel slide col-lg-8" data-ride="carousel" data-interval="5000">
                      <div class="carousel-inner embed-responsive embed-responsive-16by9"> <!-- embed is used for responsive size regardless of device -->
                          <div class="carousel-item embed-responsive-item active">
                              <iframe id="video1" src="https://www.youtube.com/embed/9gHaVjbL_zA?enablejsapi=1" allowfullscreen></iframe>
                          </div>
                          <div class="carousel-item embed-responsive-item">
                              <iframe id="video2" src="https://www.youtube.com/embed/r-aWuCoZWGA?enablejsapi=1" allowfullscreen></iframe>
                          </div>
                          <div class="carousel-item embed-responsive-item">
                              <iframe id="video3" src="https://www.youtube.com/embed/1awR1xQYnck?enablejsapi=1" allowfullscreen></iframe>
                          </div>
                          <div class="carousel-item embed-responsive-item">
                              <iframe id="video4" src="https://www.youtube.com/embed/eUUd4CLBWw8?enablejsapi=1" allowfullscreen></iframe>
                          </div>
                      </div>
                  </div>
              </div>


        </div>
    </section>
    <!-- ##### Latest Albums Area End ##### -->
    <!-- ##### Featured Artist Area Start ##### -->
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" id="presentacion" style="background-image: url(img/bg-img/color.jpg);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="featured-artist-thumb">
                        <img src="img/bg-img/ric-sonriendo-bn.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading white text-left mb-30">
                            <p>Músico</p>
                            <h2>Presentación</h2>
                        </div>
                        <p>Hola, soy <b>Ricardo Paolini</b>. Venezolano viviendo en Mexico. Especificamente en Merida, Yucatan. Me encanta el blues, el rock y la musica en general. Aficionado al futbol, videojuegos y muy recientemente al ajedrez. Tengo un canal de YT donde saco covers de canciones chidas y espero proximamente sacar musica original. ¡Memento Mori!</p>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>Cancion del momento: John Mayer - Something Like Olivia (Acoustic Performance)</p>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Featured Artist Area End ##### -->

    <!-- ##### Buy Now Area Start ##### -->
    <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100" id="musicao">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p>Próximamente</p>
                        <h2>Música Original</h2>
                        <br>
                        <img src="img/bg-img/guitar.png" alt="" style=" width:20%;height:50%;">
                    </div>
                </div>
            </div>

    </section>
    <!-- ##### Buy Now Area End ##### -->





    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" id ="contacto" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                        <h2>Contactame</h2>
                        <br>
                        <p>Puedes contactarte conmigo a través del siguiente formulario. </p>
                        <p>Igualmente puedes contactarme a traves de mis redes sociales. Los links se encuentran al final de la página</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form  action="php/enviarcorreo.php" method="post" >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Correo">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group wow fadeInUp" data-wow-delay="400ms">
                                        <textarea type="text" name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Enviar <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                  <a href="https://www.youtube.com/channel/UCz58kiBd96KUUpi47qD-TbQ" target="_blank"><img src="img/bg-img/youtube.png" style="border: 1px; width:5%;height:10%; " > youtube</a>
                  <a href="https://www.facebook.com/ricardoandres.paolinimillan" target="_blank"><img src="img/bg-img/facebook.png" style="border: 1px; width:5%;height:10%;" > facebook</a>
                  <a href="https://www.instagram.com/ricardo_paomi/" target="_blank"><img src="img/bg-img/instagram.png" style="border: 1px; width:5%;height:10%;" > instagram</a>

                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                          <li><a href="#inicio">inicio</a></li>
                          <li><a href="#videos">Videos</a></li>
                          <li><a href="#presentacion">Conóceme</a></li>
                          <li><a href="#musicao">Música original</a></li>
                          <li><a href="#contacto">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <script src="js/carousel.js"></script>

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
