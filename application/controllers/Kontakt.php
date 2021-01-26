<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontakt extends CI_Controller {

	public function index()
	{
		$this->load->view('kontakt');
	}
	/* Funktion zum Versenden der Nachricht als E-Mail, wenn Mailserver vorhanden oder php.ini konfiguriert ist!
	public function email() {
		$to = "a@a.de";
		$from = $_POST['email']; 
		$first_name = $_POST['name'];
		$last_name = $_POST['surname'];
		$subject = "Kontaktanfrage";
		$message = $first_name . " " . $last_name . " schreibt:" . "\n\n" . $_POST['Nachricht'];
		$headers = "From:" . $from;
		$headers = "From:" . $to;
		mail($to,$subject,$message,$headers);
		$this->index();
	} */
}
