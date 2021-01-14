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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap_original/css/bootstrap.css" />

    <!-- MDI CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/mdi/css/materialdesignicons.min.css" />
      
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/startseite/main.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/events.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/startseite/carousel.css">

    <title>Birgel - News</title>
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
                    <?=$this->session->userdata('name');?> 
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
              <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="<?php echo base_url();?>assets/pics/carousel2.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="<?php echo base_url();?>assets/pics/carousel3.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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

    <div id="mainbody"> 
        <div id="content">
            <div id="description">
                <h1>Aktuelles aus Birgel</h1>      
            </div>

            <div class="input-group d-flex justify-content-center">
            
                <input id="search-bar" type="text" class="form-control" placeholder="Suche" aria-label="Suche" aria-describedby="basic-addon1">
                <div class="input-group-append">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategorien
                        </a>
            
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <span class="dropdown-item active">Kategorie 1</span>
                            <span class="dropdown-item">Kategorie 2</span>
                            <span class="dropdown-item">Kategorie 3</span>
                        </div>
                    </div>
                </div>
            
                <button class="btn" type="button" id="search-button"><span class="mdi mdi-magnify"></span></button>
            </div>

            <div id="card-container" class="container-fluid">
                <div class="row justify-content-around">
                    <div class="col-lg-3 col-md-5">
                        <div class="card">
                            <img src="https://media.istockphoto.com/photos/glad-to-work-with-you-picture-id951514270"
                            class="card-img-top" alt="<?php echo base_url();?>assets/.">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn">Go somewhere</a>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-5">
                        <div class="card">
                            <img src="https://media.istockphoto.com/photos/glad-to-work-with-you-picture-id951514270"
                            class="card-img-top" alt="<?php echo base_url();?>assets/.">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn">Go somewhere</a>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-5">
                        <div class="card">
                            <img src="https://media.istockphoto.com/photos/glad-to-work-with-you-picture-id951514270" class="card-img-top"
                                alt="<?php echo base_url();?>assets/.">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>
                                <a href="#" class="btn">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="card">
                            <img src="https://media.istockphoto.com/photos/glad-to-work-with-you-picture-id951514270" class="card-img-top"
                                alt="<?php echo base_url();?>assets/.">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>
                                <a href="#" class="btn">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="card">
                            <img src="https://media.istockphoto.com/photos/glad-to-work-with-you-picture-id951514270" class="card-img-top"
                                alt="<?php echo base_url();?>assets/.">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>
                                <a href="#" class="btn">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="card">
                            <img src="https://media.istockphoto.com/photos/glad-to-work-with-you-picture-id951514270" class="card-img-top"
                                alt="<?php echo base_url();?>assets/.">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>
                                <a href="#" class="btn">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="card">
                            <img src="https://media.istockphoto.com/photos/glad-to-work-with-you-picture-id951514270" class="card-img-top"
                                alt="<?php echo base_url();?>assets/.">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>
                                <a href="#" class="btn">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="card">
                            <img src="https://media.istockphoto.com/photos/glad-to-work-with-you-picture-id951514270" class="card-img-top"
                                alt="<?php echo base_url();?>assets/.">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>
                                <a href="#" class="btn">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="card">
                            <img src="https://media.istockphoto.com/photos/glad-to-work-with-you-picture-id951514270" class="card-img-top"
                                alt="<?php echo base_url();?>assets/.">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>
                                <a href="#" class="btn">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
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
              <a href="<?php echo base_url();?>kontakt">Kontakt</a>
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
