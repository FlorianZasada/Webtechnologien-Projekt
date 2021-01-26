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
    <title>Birgel - Datenschutz</title>
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
                    <h1>Datenschutz</h1>
                </div>            
                    <p>Verantwortlicher im Sinne der Datenschutzgesetze, insbesondere der EU-Datenschutzgrundverordnung (DSGVO), ist:</p>
                    <p><strong>Birgel</strong></p>
                    <h3>Ihre Betroffenenrechte</h3>
                    <p>Unter den angegebenen Kontaktdaten unseres Datenschutzbeauftragten können Sie jederzeit folgende Rechte ausüben:</p>
                    <ul>
                        <li>Auskunft über Ihre bei uns gespeicherten Daten und deren Verarbeitung (Art. 15 DSGVO),</li>
                        <li>Berichtigung unrichtiger personenbezogener Daten (Art. 16 DSGVO),</li>
                        <li>Löschung Ihrer bei uns gespeicherten Daten (Art. 17 DSGVO),</li>
                        <li>Einschränkung der Datenverarbeitung, sofern wir Ihre Daten aufgrund gesetzlicher Pflichten noch nicht löschen dürfen (Art. 18 DSGVO),</li>
                        <li>Widerspruch gegen die Verarbeitung Ihrer Daten bei uns (Art. 21 DSGVO) und</li>
                        <li>Datenübertragbarkeit, sofern Sie in die Datenverarbeitung eingewilligt haben oder einen Vertrag mit uns abgeschlossen haben (Art. 20 DSGVO).</li>
                    </ul>
                    <p>Sofern Sie uns eine Einwilligung erteilt haben, können Sie diese jederzeit mit Wirkung für die Zukunft widerrufen.</p>
                    <p>Sie können sich jederzeit mit einer Beschwerde an eine Aufsichtsbehörde wenden, z. B. an die zuständige Aufsichtsbehörde des Bundeslands Ihres Wohnsitzes oder an die für uns als verantwortliche Stelle zuständige Behörde.</p>
                    <p>Eine Liste der Aufsichtsbehörden (für den nichtöffentlichen Bereich) mit Anschrift finden Sie unter: <a href="https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html" target="_blank" rel="nofollow noopener">https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html</a>.</p>
                    <p></p>
                    <h3>Cookies</h3>
                    <p>Wie viele andere Webseiten verwenden wir auch so genannte „Cookies“. Bei Cookies handelt es sich um kleine Textdateien, die auf Ihrem Endgerät (Laptop, Tablet, Smartphone o.ä.) gespeichert werden, wenn Sie unsere Webseite besuchen. </p>
                    <p>Sie können Sie einzelne Cookies oder den gesamten Cookie-Bestand löschen. Darüber hinaus erhalten Sie Informationen und Anleitungen, wie diese Cookies gelöscht oder deren Speicherung vorab blockiert werden können. Je nach Anbieter Ihres Browsers finden Sie die notwendigen Informationen unter den nachfolgenden Links:</p>
                    <ul>
                        <li>Mozilla Firefox: <a href="https://support.mozilla.org/de/kb/cookies-loeschen-daten-von-websites-entfernen" target="_blank" rel="nofollow noopener">https://support.mozilla.org/de/kb/cookies-loeschen-daten-von-websites-entfernen</a></li>
                        <li>Internet Explorer: <a href="https://support.microsoft.com/de-de/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank" rel="nofollow noopener">https://support.microsoft.com/de-de/help/17442/windows-internet-explorer-delete-manage-cookies</a></li>
                        <li>Google Chrome: <a href="https://support.google.com/accounts/answer/61416?hl=de" target="_blank" rel="nofollow noopener">https://support.google.com/accounts/answer/61416?hl=de</a></li>
                        <li>Opera: <a href="http://www.opera.com/de/help" target="_blank" rel="nofollow noopener">http://www.opera.com/de/help</a></li>
                        <li>Safari: <a href="https://support.apple.com/kb/PH17191?locale=de_DE&viewlocale=de_DE" target="_blank" rel="nofollow noopener">https://support.apple.com/kb/PH17191?locale=de_DE&viewlocale=de_DE</a></li>
                    </ul>
                    <h4>Speicherdauer und eingesetzte Cookies:</h4>
                    <p>Soweit Sie uns durch Ihre Browsereinstellungen oder Zustimmung die Verwendung von Cookies erlauben, können folgende Cookies auf unseren Webseiten zum Einsatz kommen:</p>
                    <p></p>
                    <h3>Technisch notwendige Cookies </h3>
                    <h4>Art und Zweck der Verarbeitung: </h4>
                    <p>Wir setzen Cookies ein, um unsere Website nutzerfreundlicher zu gestalten. Einige Elemente unserer Internetseite erfordern es, dass der aufrufende Browser auch nach einem Seitenwechsel identifiziert werden kann.</p>
                    <p>Der Zweck der Verwendung technisch notwendiger Cookies ist, die Nutzung von Websites für die Nutzer zu vereinfachen. Einige Funktionen unserer Internetseite können ohne den Einsatz von Cookies nicht angeboten werden. Für diese ist es erforderlich, dass der Browser auch nach einem Seitenwechsel wiedererkannt wird.</p>
                    <p>Für folgende Anwendungen benötigen wir Cookies:</p>
                    <p></p>
                    <h4>Rechtsgrundlage und berechtigtes Interesse: </h4>
                    <p>Die Verarbeitung erfolgt gemäß Art. 6 Abs. 1 lit. f DSGVO auf Basis unseres berechtigten Interesses an einer nutzerfreundlichen Gestaltung unserer Website.</p>
                    <h4>Empfänger: </h4>
                    <p>Empfänger der Daten sind ggf. technische Dienstleister, die für den Betrieb und die Wartung unserer Website als Auftragsverarbeiter tätig werden.</p>
                    <p></p><h4>Bereitstellung vorgeschrieben oder erforderlich:</h4>
                    <p>Die Bereitstellung der vorgenannten personenbezogenen Daten ist weder gesetzlich noch vertraglich vorgeschrieben. Ohne diese Daten ist jedoch der Dienst und die Funktionsfähigkeit unserer Website nicht gewährleistet. Zudem können einzelne Dienste und Services nicht verfügbar oder eingeschränkt sein.</p>
                    <h4>Widerspruch</h4>
                    <p>Lesen Sie dazu die Informationen über Ihr Widerspruchsrecht nach Art. 21 DSGVO weiter unten.</p>
                    <p></p><hr>
                    <h3>Information über Ihr Widerspruchsrecht nach Art. 21 DSGVO</h3>
                    <h4>Einzelfallbezogenes Widerspruchsrecht</h4>
                    <p>Sie haben das Recht, aus Gründen, die sich aus Ihrer besonderen Situation ergeben, jederzeit gegen die Verarbeitung Sie betreffender personenbezogener Daten, die aufgrund Art. 6 Abs. 1 lit. f DSGVO (Datenverarbeitung auf der Grundlage einer Interessenabwägung) erfolgt, Widerspruch einzulegen; dies gilt auch für ein auf diese Bestimmung gestütztes Profiling im Sinne von Art. 4 Nr. 4 DSGVO.</p>
                    <p>Legen Sie Widerspruch ein, werden wir Ihre personenbezogenen Daten nicht mehr verarbeiten, es sei denn, wir können zwingende schutzwürdige Gründe für die Verarbeitung nachweisen, die Ihre Interessen, Rechte und Freiheiten überwiegen, oder die Verarbeitung dient der Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen.</p>
                    <h4>Empfänger eines Widerspruchs</h4>
                    <p></p><hr>
                    <h3>Änderung unserer Datenschutzbestimmungen</h3>
                    <p>Wir behalten uns vor, diese Datenschutzerklärung anzupassen, damit sie stets den aktuellen rechtlichen Anforderungen entspricht oder um Änderungen unserer Leistungen in der Datenschutzerklärung umzusetzen, z.B. bei der Einführung neuer Services. Für Ihren erneuten Besuch gilt dann die neue Datenschutzerklärung.</p>
                    <h3>Fragen an den Datenschutzbeauftragten</h3>
                    <p>Wenn Sie Fragen zum Datenschutz haben, schreiben Sie uns bitte eine E-Mail oder wenden Sie sich direkt an die für den Datenschutz verantwortliche Person in unserer Organisation:</p>              
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