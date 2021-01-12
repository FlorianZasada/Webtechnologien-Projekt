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
                    <li class="nav-item">
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
                    <li class="nav-item ml-auto active">
                        <a class="nav-link" href="<?php echo base_url();?>admin">Adminpanel</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <?=$this->session->userdata('name');?> 
                </span>
                <?php endif;?>
            </div>
        </div>
	</nav>
  
  <!-- Main Content -->
  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="description">
                    <h1>Adminpanel</h1>
                </div>

                <div class="article">
                    <p>Nutzerverwaltung und allgemeine Einstellungen</p>
                </div>
            </div>
        </div>
        <form>
            <div class="form-group col-md-4">
            <label for="inputState">Benutzer auswählen:</label>
            <select id="inputState" class="form-control">
                <option selected>Auswählen...</option>
                <?php foreach($lastnames as $row):?>
                <option><?=$row->lastname;?></option>
                <?php endforeach;?>
            </select>
        </div>
        </form>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Nachname</th>
                <th scope="col">E-Mail</th>
                <th scope="col">E-Mail verifiziert?</th>
                <th scope="col">Ist Administrator?</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                </tr>
            </tbody>
        </table>
    </div>

  <footer class="bottom-footer">
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
    <script src="<?=base_url();?>assets/js/admin_page.js"></script>
  </body>
</html>