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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/startseite/main.css">
    <title>Birgel - Startseite</title>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url();?>home">Startseite<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
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
      
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="description">
                    <h1>Herzlich Willkommen...</h1>
                    <p>Der Bezirk Birgel gehört zu der Kreisstadt Düren und ist trotz der kleinen Fläche von 4,46km2 ein interessanter Ort, der mit seinen 1.766 Einwohnern (stand 31. Dezember 2019) auch besonders für seine städtischen Vereine bekannt ist: Vereinsleben</p>
                </div>

                <div class="article">
                    <p>Birgel liegt etwa 5km südwestlich des Dürener Stadtzentrums und ist daher eine perfekte Mischung aus Ruhe und Stadtleben. Mit der ehemaligen Wasserburg, die heutzutage als Grundschule genutzt wird, hat Birgel eine sagenhafte und exklusive Sehenswürdigkeit: Leben/Freizeit</p>
                </div>

                <div class="article">
                    <p>Die Historie, die den Gebäude dieses Bezirks in den Wänden liegt ist auch in den dörflichen Straßenzügen mit vereinzelten Fachwerkhäusern erkennbar. Daher formt Birgel eine gemütliche Atmosphäre und lädt zu Besuchen ein.</p>
                </div>
                <div class="article">
                    <p>Um mehr über Birgel erfahren zu können, bietet diese Internetseite alle möglichen Informationen rund um den Bezirk.</p>
                </div>
            </div>
        
            <div class="col-lg-8">
                <div class="row justify-content-between">
                    <div class="col-4 preview-card">
                        <a href="./html/news.html">
                            <div class="card">
                                <img src="<?php echo base_url();?>/assets/pics/Dueren_Banner.jpg" class="card-img-top" alt="...">
                                <div class="card-body prewview-card-body">
                                    <h5 class="card-title preview-card-title">News</h5>
                                    <p class="card-text">Some quick example text to build on the card title and     make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 preview-card">
                        <a href="./html/events.html">
                            <div class="card">
                                <img src="<?php echo base_url();?>assets/pics/Dueren_Banner.jpg" class="card-img-top" alt="...">
                                <div class="card-body prewview-card-body">
                                    <h5 class="card-title preview-card-title">Events</h5>
                                    <p class="card-text">Some quick example text to build on the card title and     make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-4 preview-card">
                        <a href="./html/anfahrt.html">
                            <div class="card">
                                <img src="<?php echo base_url();?>assets/pics/Dueren_Banner.jpg" class="card-img-top" alt="...">
                                <div class="card-body prewview-card-body">
                                    <h5 class="card-title preview-card-title">Anfahrt</h5>
                                    <p class="card-text">Some quick example text to build on the        card title and     make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <footer>
        <!-- Grid row-->
    <div id="footer-menu" class="row text-center d-flex justify-content-center pt-4">

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
      
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
