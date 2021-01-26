<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html>
  <head>
      
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>/assets/favicon.ico">
      
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/startseite/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/startseite/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/startseite/carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/colors.css">

    <title>Birgel - Startseite</title>
  </head>
  
  <body>

  <!--Modal: modalCookie-->
  <div class="modal fade top modalCookie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
      <!--Content-->
      <div class="modal-content">
        <!--Body-->
        <div class="modal-body">
          <div class="row justify-content-center align-items-center">

            <p class="cookie-text">Um unsere Webseite für Sie optimal zu gestalten und fortlaufend verbessern zu können, verwenden wir Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung von Cookies zu. Weitere Informationen zu Cookies erhalten Sie in unserer <a href="<?php echo base_url();?>datenschutz">Datenschutzerklärung.</a></p>

          </div>
          
          <div class="row justify-content-center">
            <a href="<?php echo base_url();?>datenschutz" type="button" class="btn btn-primary cookie-btn">Mehr Informationen
              <!--i class="fas fa-book ml-1"></i-->
            </a>
            <a type="button" class="cookie-btn btn btn-outline-primary waves-effect" data-dismiss="modal">Alles klar!</a>
          </div>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
    <!--Modal: modalCookie-->
  
	<!-- Navigationsleiste -->
	<nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url();?>home">
                <img src="<?php echo base_url();?>assets/pics/Wappen_Birgel_Dueren.png" width="46" height="60" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url();?>home">Startseite<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>leben_freizeit">Leben & Freizeit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>kontakt">Kontakt</a>
                    </li>
                </ul>
                <?php if(!$this->session->userdata("id")):?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>login">Login</a>
                    </li>
                </ul>
                <?php else:?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>home/logout">Logout</a>
                    </li>
                    <?php if($this->session->userdata("admin")):?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin">Adminpanel</a>
                    </li>
                    <?php endif;?>
                </ul>
                <span class="navbar-text">
                  <strong><?=$this->session->userdata('name');?></strong>
                </span>
                <?php endif;?>
            </div>
        </div>
	</nav>
    
    

	<!-- Slideshow -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="<?php echo base_url();?>assets/pics/carousel1.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption text-left carousel-ding">
                <div class= "carousel-caption-outer">
                  <h1>Leben und Freizeit</h1>
                  <p>Lernen Sie jetzt den Bezirk Birgel kennen und schauen Sie doch mal vorbei!</p>
                  <p><a class="btn btn-lg btn-primary" href="<?php echo base_url();?>leben_freizeit" role="button">zu Leben und Freizeit</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="<?php echo base_url();?>assets/pics/carousel2.jpg" alt="Second slide">
            <div class="container">
            <div class= "carousel-caption-outer">
              <div class="carousel-caption carousel-ding">
    
                <h1>Events</h1>
                <p>Seien Sie immer auf den neusten Stand und erfahren Sie, was aktuell in Birgel los ist!</p>
                <p><a class="btn btn-lg btn-primary" href="<?php echo base_url();?>events" role="button">zu Events</a></p>
              </div>
                    </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="<?php echo base_url();?>assets/pics/carousel3.jpg" alt="Third slide">
            <div class="container">
            <div class= "carousel-caption-outer">
              <div class="carousel-caption text-right carousel-ding">
                <h1>News</h1>
                <p>Aktuelle Nachrichten aus dem Bezirk und Umfeld immer auf einen Klick abrufbar.</p>
                <p><a class="btn btn-lg btn-primary" href="<?php echo base_url();?>news" role="button">zu News</a></p>
              </div>
            </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      
        <div class="container marketing">
        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Herzlich Willkommen!</h2>
                <p class="lead">Der Bezirk Birgel gehört zu der Kreisstadt Düren und ist trotz der kleinen Fläche von 4,46km2 ein interessanter Ort, der mit seinen 1.766 Einwohnern (stand 31. Dezember 2019) auch besonders für seine städtischen Vereine bekannt ist: Vereinsleben.</p>
                <p class="lead">Birgel liegt etwa 5km südwestlich des Dürener Stadtzentrums und ist daher eine perfekte Mischung aus Ruhe und Stadtleben. Mit der ehemaligen Wasserburg, die heutzutage als Grundschule genutzt wird, hat Birgel eine sagenhafte und exklusive Sehenswürdigkeit: Leben/Freizeit</p>
                <p class="lead">Die Historie, die den Gebäude dieses Bezirks in den Wänden liegt ist auch in den dörflichen Straßenzügen mit vereinzelten Fachwerkhäusern erkennbar. Daher formt Birgel eine gemütliche Atmosphäre und lädt zu Besuchen ein.</p>
                <p class="lead">Um mehr über Birgel erfahren zu können, bietet diese Internetseite alle möglichen Informationen rund um den Bezirk.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" id='luftbild' src="<?php echo base_url();?>assets/pics/startseite/birgel_luftbild.jpg" alt="Generic placeholder image">
            </div>
            </div>
        </div>
            
      
        <div class="row justify-content-center">
            <div class="col-md-8">
                

                
            </div>
        </div>

    <div class="container marketing"> 
        <hr class="featurette-divider">
        <!-- Three columns of text below the carousel -->
        <div class="row">
        <div class="col-lg-4">
            <a href="<?php echo base_url();?>events"><img class="rounded-circle" src="<?php echo base_url();?>assets/pics/lebenundfreizeit/maifest.jpg" alt="Generic placeholder image" width="140" height="140"></a>
            <h2>Veranstaltungen</h2>
            <p>Klicken Sie hier, um die aktuellsten Veranstaltungen und und Freizeitangebote im Bezirk zu entdecken.</p>
            <p><a class="btn btn-primary" href="<?php echo base_url();?>events" role="button">Zu Veranstaltungen &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <a href="<?php echo base_url();?>news"><img class="rounded-circle" src="<?php echo base_url();?>assets/pics/lebenundfreizeit/sportplatz.jpg" alt="Generic placeholder image" width="140" height="140"></a>
            <h2>News</h2>
            <p>Seien Sie immer auf dem neusten Stand, was sich in Birgel und der Umgebung passiert. Verpassen Sie nichts mehr.</p>
            <p><a class="btn btn-primary" href="<?php echo base_url();?>news" role="button">Zu News &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <a href="<?php echo base_url();?>leben_freizeit"><img class="rounded-circle" src="<?php echo base_url();?>assets/pics/lebenundfreizeit/bauernhof.jpg" alt="Generic placeholder image" width="140" height="140"></a>
            <h2>Erholungsflächen</h2>
            <p>Tauchen Sie tiefer in die Idylle des Bezirks und finden Sie die besten Erholungsflächen.</p>
            <p><a class="btn btn-primary" href="<?php echo base_url();?>leben_freizeit" role="button">Zu Leben und Freizeit &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        </div>
    </div><!-- /.row -->              

    
    <!-- FOOTER --> 
    <footer class="container">
        <hr class="featurette-divider">
        <p>&copy; 2020 Birgel &middot; <a href="<?php echo base_url();?>impressum">Impressum</a> &middot; <a href="<?php echo base_url();?>datenschutz">Datenschutz</a></p>
    </footer>

    <a class="btn btn-primary btt-btn" href="#">Zum Seitenanfang</a>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?=base_url();?>assets/js/cookies.js"></script>
  </body>
</html>
