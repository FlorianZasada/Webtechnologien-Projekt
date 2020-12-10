<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Welcome to CarShare</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
<!--Main Navigation-->
<header>
<!--Controller werden über die URI aufgerufen: http://domain.de/class/method -->
<!--Die lokale URL liefert uns PHP: base_url(); -->
<!--An die base_url müssen wir noch den Controller anhängen -->
<!--Beispiel:  <a class="nav-link" href="[bae_url]login">Login</a> ruft den Login-Controller auf-->
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>kontakt">Kontakt</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url();?>login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
	</nav>
</header>
<!--Main Navigation-->

<!--Main Layout-->
<main class="text-center py-5">

<div class="container">
  <br />
  <h3 align="center">Registriere Dich bei CarShare!</h3>
  <br />
  <div class="card card-default">
   <div class="card-header">Anmeldung</div>
   <div class="card-body">
   <!--AUFGABE Ergänzen Sie Formularfelder für die Nutzerdaten nach dem folgenden Schema -->
   <!--Orientieren Sie sich am Beispiel in /views/login.php
      Feld: user_name
      Feld: user_lastname
      Feld: user_email
      Feld: user_password
    -->
    <form method="post" action="<?php echo base_url(); ?>register/validation">
    <!-- Formularfeld Name --> 
      <div class="form-group">
        <label>Enter Name</label>
        <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
        <span class="text-danger"><?php echo form_error('user_name'); ?></span>
      </div>
    <!-- Formularfeld Nachname --> 
      <div class="form-group">
        <label>Enter Lastname</label>
        <input type="text" name="user_lastname" class="form-control" value="<?php echo set_value('user_lastname'); ?>" />
        <span class="text-danger"><?php echo form_error('user_lastname'); ?></span>
      </div>
    <!-- Formularfeld Email -->      
      <div class="form-group">
        <label>Enter Email Address</label>
        <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
      </div>
    <!-- Formularfeld Passwort -->  
      <div class="form-group">
        <label>Enter Password</label>
        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
      </div>
    <!-- Button Register --> 
     <div class="form-group">
        <input type="submit" name="register" value="Register" class="btn btn-info" />
     </div>
    </form>
   </div>
  </div>
 </div>

</main>
<footer class="page-footer font-small blue pt-4">
  <!-- Copyright & Impressum -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="...">CarShare</a>
    <a href="...">Impressum</a>    
  </div>
  <!-- Copyright -->    

</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<!DOCTYPE html>
<html>
<head>
 <title>Registriere Dich bei CarShare!</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
</head>

<body>

</body>
</html>