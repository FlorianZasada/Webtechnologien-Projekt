<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html>
  <head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/startseite/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/leben_freizeit/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/leben_freizeit/leben_freizeit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    
    <title>Birgel - Leben und Freizeit</title>
  </head>
  
  <body>
  
	<!-- Navigationsleiste -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url();?>leben_freizeit">Leben & Freizeit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Karte</a>
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
                    <?=$this->session->userdata('name');?> 
                </span>
                <?php endif;?>
            </div>
        </div>
	</nav>
      
    <!-- Slideshow -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
			  <img class="d-block w-100" src="<?php echo base_url();?>assets/pics/carousel1.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="<?php echo base_url();?>assets/pics/carousel2.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="<?php echo base_url();?>assets/pics/carousel3.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Zurück</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Vor</span>
		</a>
	</div>
      
    <div id="mainbody"> 
        <div id="mainbody"> 
            <div id="content">
                <div id="description">
                    <h1>Leben und Freizeit</h1>
                </div>

                <div class="article">
                    <h3>Eckeberger Kinderbauernhof</h3>
                    <p>Der Eckeberger Kinderbauernhof ist vormittags für Spielgruppen, Kindergärten und Schulklassen geöffnet. Nachmittags können dort Kindergeburtstage gefeiert werden.
                        Seit mehreren Jahren haben Kinder zwischen zwei und zwölf Jahren auf dem idyllisch gelegenen Hof am Waldrand von Birgel die Möglichkeit, Tiere (u.a. Kühe, Ponys, Schafe, Ziegen, Meerschweinchen und Häschen) und Natur hautnah zu erleben.
                        Es werden Planwagenfahrten angeboten, und die Strohspielescheune mit Trampolin lädt zum Klettern ein. Zwischendurch besteht die Möglichkeit, in einer gemütlichen Holzhütte zu picknicken.
                        </p>
                </div>

                <div class="article">
                    <h3>Spielplätze</h3>
                    <p>Auf vier Spielplätzen können die Kinder aus Birgel rutschen, klettern, schaukeln und toben. Der Spielplatz "Fliederbusch" bietet mit einer Größe von 820 m² alles, was das Kinderherz begehrt. 
                        Auf dem Spielplatz befindet sich auch eine Tischtennisplatte. Ebenso ein Paradies für Kinder ist der Spielplatz "Zum Kirchenpättchen" mit einer Größe von 376 m². Den Kindern steht auchder Spielplatz "Dorfplatz Schieferbenden" zur Verfügung. 
                        Dieser Spielplatz hat eine Größe von 1374 m². Im Burghof befindet sich ein vierter Spielplatz, der hauptsächlich von den Schulkindern genutzt wird.</p>
                </div>
                <div class="article">
                    <h3>Sportanlagen</h3>
                    <h4>Schützenheim</h4>
                        <p>In der Burg Birgel befindet sich ein Luftgewehrstand der St. Johannes Schützenbruderschaft Birgel 1851 e.V.</p>
                    <h4>Sportplatz mit Sportheim</h4>
                        <p>Der städtische Sportplatz umfasst einen Rasen- und einen Ascheplatz. Angrenzend an den Rasenplatz befindet sich das Sportheim.</p>
                    <h4>Städtische Sporthalle</h4>
                        <p>Die Sporthalle der Grundschule Burg Birgel hat eine Größe von 9,5 m x 12 m und wird von den Vereinen genutzt.</p>

                </div>
            </div>

            <div class="sidebar">

                <h4>Erholungsflächen</h4>
                <p>Das freiliegende Birgel bietet viel Raum für lange Spaziergänge in der Natur. Mögliche Ziele sind der Staatsforst Gürzenich und der Park an der Burg Birgel.</p>
            <h4>Grillplätze</h4>
                <p>In Birgel befindet sich ein 120 m² großer Grillplatz mit einer Grillhütte und vier Tischen und acht Bänken, die fest im Boden verankert sind.</p>
            <h4>Löschgruppe Birgel</h4>
                <p>Die Löschgruppe der Freiwilligen Feuerwehr der Stadt Düren bildet zusammen mit den benachbarten Löschgruppen Derichsweiler und Gürzenich einen Löschzug.</p>


            </div>
            
        </div>
    </div>
    
    <footer>
        <!-- Grid row-->
    <div id="footer-menu" class="text-center d-flex justify-content-center pt-4">

          <!-- Grid column -->
          <div class="col-md-2 mb-3">
              <h6 class="text-uppercase">
                  <a href="#!">Impressum</a>
              </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 mb-3">
              <h6 class="text-uppercase">
                  <a href="#!">Datenschutz</a>
              </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 mb-3">
            <h6 class="text-uppercase">
              <a href="#!">Kontakt</a>
            </h6>
          </div>
          <!-- Grid column -->
        </div>
        
        <div id="footer-copyright" class="footer-copyright text-center py-3" >© 2020 Copyright:
            <a href="https://birgel.de/"> birgel.de</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </body>
</html>
