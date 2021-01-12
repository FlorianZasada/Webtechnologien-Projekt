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

    <title>Birgel - Events</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>leben_freizeit">Leben & Freizeit</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url();?>events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>karte">Karte</a>
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
        <div id="content">
            <div id="description">
                <h1>Veranstaltungen</h1>
                <h3>Hier werden alle lokalen Veranstaltungen angezeigt!</h3>
            </div>
            
            <!-- Suchfunktion -->
            <div class="input-group d-flex justify-content-center">
            
                <input id="search-bar" type="text" class="form-control" placeholder="Suche" aria-label="Suche" aria-describedby="basic-addon1">

                <input class="date-picker" id="search-date-from" type="date" data-toggle="tooltip" data-placement="top" title="Von">
                <input class="date-picker" id="search-date-to" type="date" data-toggle="tooltip" data-placement="top" title="Bis">
                <button class="btn highlight-button" type="button" id="clear-button" data-toggle="tooltip" data-placement="top" title="Datumsfelder leeren"><span class="mdi mdi-delete"></span></button>
                
                <?php if($this->session->userdata("admin")):?>
                <button class="btn highlight-button" type="button" id="add-event-button" data-toggle="modal" data-target="#createEvent">Event hinzufügen</button>
                <?php endif;?>
            </div>
            
            <!--Modal-->
            <div class="modal fade" id="createEvent" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitel">Event hinzufügen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="<?php echo base_url(); ?>events/validation" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="input-group">
                                <div class="d-flex flex-column"><?php echo validation_errors();
                                if(isset($upload_error)) echo $upload_error; 
                                ?></div>
                                <div class="row col-12">
                                    <input type="text" class="form-control" name="events_title" placeholder="Titel" value="<?php if(isset($err_title)) echo $err_title;?>" aria-label="Titel" aria-describedby="basic-addon1">
                                </div>

                                <div class="form-floating row col-12">
                                    <textarea class="form-control" name="events_description" placeholder="Beschreibung" id="floatingTextarea" maxlength="500"><?php if(isset($err_description)) echo $err_description;?></textarea>
                                </div>

                                <div class="row col-12">
                                    <label for="image-upload">Bild auswahl</label>
                                    <div class="custom-file">
                                        <input type="file" name="events-image" class="custom-file-input form-control" size="5000" id="image-upload" accept="image/png, image/jpeg, image/jpg">
                                        <label class="custom-file-label" for="image-upload">Datei Auswählen</label>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" id="close-button" data-dismiss="modal">Schließen</button>
                            <button type="submit" class="btn highlight-button">Speichern</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            <!-- Karten -->
            <div id="card-container" class="container-fluid">
                <div class="row justify-content-around">
                <?php foreach($cards as $row):?>
                    <div class="event-card col-lg-3 col-md-5">
                        <div class="card" data-id="<?=$row->id?>">
                            <img src="<?=base_url() . 'assets/pics/events/' . $row->image?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?=$row->title?></h5>
                                <p class="card-text"><?=$row->description?></p>
                                <p class="card-text card-date" data-date="<?=date("Y-m-d", strtotime($row->created))?>"><small class="text-muted">Erstellt am <?=date("d.m.Y", strtotime($row->created)) . ' um ' . date("H:i", strtotime($row->created));?></small>
                                    <?php if($this->session->userdata("admin")):?>
                                    <button class="btn btn-light delete-button"><span class="mdi mdi-delete"></span></button>
                                    <?php endif;?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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
              <a href="#!">Kontakt</a>
            </h6>
          </div>
          <!-- Grid column -->
        </div>
        
        <div id="footer-copyright" class="footer-copyright text-center py-3" >© 2020 Copyright:
            <a href="https://birgel.de/"> birgel.de</a>
        </div>
    </footer>
    <script src="<?=base_url();?>assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?=base_url();?>assets/js/events.js"></script>
  </body>
</html>
