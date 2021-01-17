<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impressum extends CI_Controller {

	/**
	 * Controller für unsere Startseite
	 * der Controller lädt zuerst die landing_page
	 * 
	 * Das laden einer View erfolgt mittels:
	 * $this->load->view('name der view');
	 * Beispiel:
	 * $this->load->view('landing_page');
	 */
	public function index()
	{
		//AUFGABE: laden Sie die landing_page
		$this->load->view('impressum');
	}

	function logout()
	{
    /**
     * Zum Abmelden der Webseite verwenden wir die Hilfsklasse Session - der Code sieht wiefolgt aus:
     */

    //Laden der Session
    $data = $this->session->all_userdata();

    //Löschen der Anmeldung
    foreach($data as $row => $rows_value)
    {
        $this->session->unset_userdata($row);
    }

    /**
     * Nach erfolgreichem Löschen der Session, senden wir den Nutzer zurück zur Startseite
     */

    //AUFGABE: geben Sie die Kontrolle zurück an den Start-Controller (home): redirect('name des ziels');
    redirect('impressum');
	}
}