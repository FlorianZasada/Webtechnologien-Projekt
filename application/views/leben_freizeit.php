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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/leben_freizeit/leben_freizeit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/startseite/carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/startseite/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/colors.css">

    <title>Birgel - Leben und Freizeit</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>home">Startseite<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>news">News</a>
                    </li>
                    <li class="nav-item active">
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
                <h2 class="featurette-heading">Spielplätze</h2>
                <p class="lead">Auf vier Spielplätzen können die Kinder aus Birgel rutschen, klettern, schaukeln und toben. Der Spielplatz "Fliederbusch" bietet mit einer Größe von 820 m² alles, was das Kinderherz begehrt. Auf dem Spielplatz befindet sich auch eine Tischtennisplatte. Ebenso ein Paradies für Kinder ist der Spielplatz "Zum Kirchenpättchen" mit einer Größe von 376 m². Den Kindern steht auchder Spielplatz "Dorfplatz Schieferbenden" zur Verfügung. Dieser Spielplatz hat eine Größe von 1374 m². Im Burghof befindet sich ein vierter Spielplatz, der hauptsächlich von den Schulkindern genutzt wird.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="<?php echo base_url();?>assets/pics/lebenundfreizeit/spielplatz.jpg" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Sportanlagen</h2>
                <p class="lead">Der städtische Sportplatz umfasst einen Rasen- und einen Ascheplatz. Angrenzend an den Rasenplatz befindet sich das Sportheim.
                Die Sporthalle der Grundschule Burg Birgel hat eine Größe von 9,5 m x 12 m und wird von den Vereinen genutzt. 
                In der Burg Birgel befindet sich ein Luftgewehrstand der St. Johannes Schützenbruderschaft Birgel 1851 e.V.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="<?php echo base_url();?>assets/pics/lebenundfreizeit/sportplatz.jpg" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Vereine<span class="text-muted"></span></h2>
                <p class="lead">Im Jahr 2012 gehören der IG die folgenden Birgeler Vereine und Ortsgruppen an: Freiwillige Feuerwehr Düren, Löschgruppe Birgel, 
St. Johannes Schützenbruderschaft Düren-Birgel 1851 e.V.,
Karnevalsgesellschaft Böse Buben Birgel 1960 e.V.,
Sportverein TUS Germania Birgel,
Tambourcorps Alte Kameraden Birgel 1928 e.V.,
Freunde der Feuerwehr Birgel e.V.,
Jugendfreizeit Birgel e.V.,
Angelverein Birgeler Karpfen,
Maigesellschaft Birgel e.V.,
Frauen- und Mütterverein Birgel,
Förderverein Grundschule Burg Birgel,
Förderverein Kindergarten Li-La-Launeburg,
Pfarrgemeinderat Sankt Martin Birgel,
VDK Birgel,
FC Schnecke,
CDU-Ortsverband Düren-West,
SPD Ortsgruppe Birgel,
AWO Birgel-Rölsdorf</p>
        </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="<?php echo base_url();?>assets/pics/lebenundfreizeit/maifest.jpg" alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Erholungsflächen. <span class="text-muted">Grillplatz und Bauernhof</span></h2>
                <p class="lead">Das freiliegende Birgel bietet viel Raum für lange Spaziergänge in der Natur. Mögliche Ziele sind der Staatsforst Gürzenich und der Park an der Burg Birgel.
                In Birgel befindet sich ein 120 m² großer Grillplatz mit einer Grillhütte und vier Tischen und acht Bänken, die fest im Boden verankert sind.<br>
                Der Eckeberger Kinderbauernhof ist vormittags für Spielgruppen, Kindergärten und Schulklassen geöffnet. Nachmittags können dort Kindergeburtstage gefeiert werden. Seit mehreren Jahren haben Kinder zwischen zwei und zwölf Jahren auf dem idyllisch gelegenen Hof am Waldrand von Birgel die Möglichkeit, Tiere (u.a. Kühe, Ponys, Schafe, Ziegen, Meerschweinchen und Häschen) und Natur hautnah zu erleben. Es werden Planwagenfahrten angeboten, und die Strohspielescheune mit Trampolin lädt zum Klettern ein. Zwischendurch besteht die Möglichkeit, in einer gemütlichen Holzhütte zu picknicken.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="<?php echo base_url();?>assets/pics/lebenundfreizeit/bauernhof.jpg" alt="Generic placeholder image">
            </div>
        </div>

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

    <!-- FOOTER --> 
    <footer class="container">
        <hr class="featurette-divider">
        <p>&copy; 2020 Birgel &middot; <a href="<?php echo base_url();?>impressum">Impressum</a> &middot; <a href="<?php echo base_url();?>datenschutz">Datenschutz</a></p>
    </footer>

    <a class="btn btn-primary btt-btn" href="#">Zum Seitenanfang</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </body>
</html>
