<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	/**
	 * Controller für unsere Registrierung
	 * 
     * die Funktion index() lädt die View "register"
     * 
     * die Funktion validation() prüft die Eingaben der Felder und sendet die Daten an das Model "register_model"
     *   
	 */
 public function __construct()
 {
     /**
      * CodeIgniter liefert uns eine Controller-Klasse die wir erweitern.
      * 
      * Im Konstruktor laden wir eine Hilfbibliothek und das Model zum Schreiben in die DB
      * Hilfsklasse: form_validation (prüft Sicherheit und Plausibilität)
      * Model: register_model (auf dessen Funktion insert() wollen wir zugreifen)
      */
    parent::__construct();
    if($this->session->userdata('id'))
    {
        redirect('dashboard');
    }
    //Laden der Hilfsklasse für die Formularfeldprüfung
    $this->load->library('form_validation');
    //Laden des entsprechenden Models für die Nutzerregistrierung
    $this->load->model('register_model');
 }

 function index()
 {
    //AUFGABE: laden Sie die View "register" (siehe auch Hinweis in Home.php)
    $this->load->view('register');
 }

 function validation()
 {
    /**
     * Die View register definiert 4 Formularfelder. Haben Sie die korrekten Namen verwendet?
     * Die Hilfsklasse lässt uns wichtige Überprüfungen durchführen.
     * Dazu rufen wir die Funktion set_rules() auf, siehe unten.
     * 
     */
    //Regeln setzen
    $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
    $this->form_validation->set_rules('user_lastname', 'Nachname', 'required|trim');
    $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('user_password', 'Password', 'required');
    
    //Überprüfung durchführen
    if($this->form_validation->run())
    {
        //eindeutigen Schlüssel erzeugen
        $verification_key = md5(rand());

        //Das passwort in einen Hash-Wert umwandeln, da wir keine Passwörter speichern!
        $password_hash = password_hash($this->input->post('user_password'), PASSWORD_DEFAULT);

        //Nutzerdaten für die Übergabe an das Modell vorbereiten
        $data = array(
            'name'  => $this->input->post('user_name'),
            'lastname'  => $this->input->post('user_lastname'),
            'email'  => $this->input->post('user_email'),
            'password' => $password_hash,
            'verification_key' => $verification_key
        );

        //AUFGABE: geben Sie das Array an das Modell (Funktion insert()) und speichern Sie den Rückgabewert in $id
        $id = $this->register_model->insert($data);

        /**
         * Hier könnten wir die getrennte Prüfung der Emailadresse einsetzen. Da wir heute MVC und Formularfelder besprechen, setzen
         * wir die Verifizierung direkt über die Funktion verify_email unseres Modells.
         */
        $this->register_model->verify_email($verification_key);

        //Nachricht für die Startseite erzeugen, damit der Nutzer informiert ist.
        $this->session->set_flashdata('message','Registrierung erfolgreich.');

        //AUFGABE: geben Sie die Kontrolle zurück an den Start-Controller (home): redirect('name des ziels');
        redirect('login');
    }
    else
    {
        $this->index();
    }
}
}

?>