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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/startseite/bootstrap.css" />
      
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/startseite/main.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/events.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/colors.css">
      
    <title>Birgel - Kontakt</title>
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
            <a href="<?php echo base_url();?>datenschutz" type="button" class="btn btn-primary cookie-btn">Learn more
              <!--i class="fas fa-book ml-1"></i-->
            </a>
            <a type="button" class="cookie-btn btn btn-outline-primary waves-effect" data-dismiss="modal">Ok, thanks</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>leben_freizeit">Leben & Freizeit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>events">Events</a>
                    </li>
                    <li class="nav-item active">
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin">Adminpanel</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <strong><?=$this->session->userdata('name');?></strong>
                </span>
                <?php endif;?>
            </div>
        </div>
    </nav><br><br>
    

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
                    <input id="form_telefon" type="tel" pattern='^\+?\d{0,13}' name="telefon" class="form-control" placeholder="Bitte hier Telefonnummer eingeben">
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
            
                    <input type="checkbox" required name="datenschutz" value="check">
            
                    Ich habe die Informationen zum <a href=<?php echo base_url();?>datenschutz>Datenschutz</a> gelesen. *    
                </div>
                
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="→ Senden">
            </div>
        </div>
    </div>
    </div>
   </form><br><br>
    
   <!-- FOOTER --> 
   <footer class="container">
        <hr class="featurette-divider">
        <p>&copy; 2020 Birgel &middot; <a href="<?php echo base_url();?>impressum">Impressum</a> &middot; <a href="<?php echo base_url();?>datenschutz">Datenschutz</a></p>
    </footer>
      
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
