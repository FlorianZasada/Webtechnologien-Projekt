<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	/**
	 * Controller für unser Login
	 * 
     * die Funktion index() lädt die View "login"
     * 
     * die Funktion validation() prüft die Eingaben der Felder und sendet die Daten an das Model "login_model"
     *   
	 */
 public function __construct()
 {
      /**
      * CodeIgniter liefert uns eine Controller-Klasse die wir erweitern.
      * 
      * Im Konstruktor laden wir eine Hilfbibliothek und das Model zum Schreiben in die DB
      * Hilfsklasse: form_validation (prüft Sicherheit und Plausibilität)
      * Model: login_model (auf dessen Funktion can_login() wollen wir zugreifen)
      */
    parent::__construct();
    if($this->session->userdata('id'))
    {
      redirect('home');
    }
    //Laden der Hilfsklasse für die Formularfeldprüfung
    $this->load->library('form_validation');
    //Laden des entsprechenden Models für die Nutzerregistrierung
    $this->load->model('login_model');
 }

 function index()
 {
    //AUFGABE: laden Sie die View "login" (siehe auch Hinweis in Home.php)
    $this->load->view('login');
 }

 function validation()
 {
    /**
     * Die View register definiert 2 Formularfelder. Haben Sie die korrekten Namen verwendet?
     * Die Hilfsklasse lässt uns wichtige Überprüfungen durchführen.
     * Dazu rufen wir die Funktion set_rules() auf, siehe unten.
     * 
     */
    //Regeln setzen
    $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
    $this->form_validation->set_rules('user_password', 'Password', 'required');

    //Überprüfung durchführen
    if($this->form_validation->run())
    {
      /**
       * AUFGABE: übergeben Sie die beiden Inhalte der Felder an das Modell (Funktion can_login()) und speichern Sie den Rückgabewert in $result
       */
      $result = $this->login_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
      
      /**
       * can_login liefert uns einen String zurück
       * 
       * im Rückgabewert steht eine Fehlermeldung, falls die Anmeldung nicht erfolgreich war.
       */
      if($result == '')
      {
        //AUFGABE: geben Sie die Kontrolle weiter an den Dashboard-Controller (dashboard): redirect('name des ziels');
        redirect('home');
      }
      else
      {
        $this->session->set_flashdata('message',$result);
        //AUFGABE: geben Sie die Kontrolle zurück an den Login-Controller (login): redirect('name des ziels');
        redirect('login');
      }
    }
    else
    {
      $this->index();
    }
}

}

?>