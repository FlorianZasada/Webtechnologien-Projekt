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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/colors.css">
      
    <title>Birgel - Impressum</title>
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
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="<?php echo base_url();?>admin">Adminpanel</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <strong><?=$this->session->userdata('name');?></strong> 
                </span>
                <?php endif;?>
            </div>
        </div>
	</nav>
    <br>
    <!-- Main Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="description">
                    <h1>Impressum</h1>
                </div>            
                
                <h3>Angaben gem&auml;&szlig; &sect; 5 TMG</h3>
                <p>Birgel<br />
                Musterstra&szlig;e 111<br />
                Geb&auml;ude 44<br />
                90210 Musterstadt</p>

                <p><strong>Vertreten durch:</strong><br />
                Dr. Harry Mustermann<br />
                Luise Beispiel</p>

                <h3>Kontakt</h3>
                <p>Telefon: +49 (0) 123 44 55 66<br />
                Telefax: +49 (0) 123 44 55 99<br />
                E-Mail: mustermann@musterfirma.de</p>

                <h3>Umsatzsteuer-ID</h3>
                <p>Umsatzsteuer-Identifikationsnummer gem&auml;&szlig; &sect; 27 a Umsatzsteuergesetz:<br />
                DE999999999</p>

                <h3>Verbraucher&shy;streit&shy;beilegung/Universal&shy;schlichtungs&shy;stelle</h3> 
                <p>Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>
            </div>
        </div>
    </div>                              

    <!-- FOOTER --> 
    <footer class="container">
        <hr class="featurette-divider">
        <p>&copy; 2020 Birgel &middot; <a href="<?php echo base_url();?>impressum">Impressum</a> &middot; <a href="<?php echo base_url();?>datenschutz">Datenschutz</a></p>
    </footer>

    <a class="btn btn-primary btt-btn" href="#">Zum Seitenanfang</a>
    <script src="<?=base_url();?>assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="<?=base_url();?>assets/js/admin_page.js"></script>
  </body>
</html>