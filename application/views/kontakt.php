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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/startseite/bootstrap.css" />
      
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/startseite/main.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/events.css" />

    <title>Birgel - Kontakt</title>
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
                        <a class="nav-link" href="#">Karte</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url();?>kontakt">Kontakt</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
	</nav>

        <form>    
            <div class="container">
                <h1> Kontaktformular </h1><br>  
                 <h3>Ihre Nachricht an die Gemeindevertretung </h3><br>

             <div class="row">
                <div class="col-md-12">
                    <p class="text-muted">
                        <strong>*</strong> = Pflichtfelder
                    </p>
                </div>
             </div><br>    

                 <div class="messages"></div>

                <div class="controls"></div>

            <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Vorname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Bitte hier Vornamen eingeben" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
                        
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Nachname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Bitte hier Nachnamen eingeben" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
         </div>
                    
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Bitte hier Email eingeben" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefon">Telefon (optional)</label>
                    <input id="form_telefon" type="tel" name="telefon" class="form-control" placeholder="Bitte hier Telefonnummer eingeben" required="required" date-error="Valid telefon is required.">
                    <div class="help-block with-errors"></div>
                </div>
             </div>     
        </div>
            
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Nachricht *</label>
                    <textarea id="form_message" name="Nachricht" class="form-control" placeholder="Ich möchte folgendes sagen" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>    
            
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
            
                    <input type="checkbox" name="datenschutz" value="check">
            
                        Ich habe die Informationen zum Datenschutz gelesen. *    
                </div>
                
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="→ Senden">
            </div>
        </div>
    </div>
    </div>
   </form><br><br>

     <div class="sidebar">Eine Sidebar für was auch immer man hier reinschreiben möchte</div>

    
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
  </body>
</html>