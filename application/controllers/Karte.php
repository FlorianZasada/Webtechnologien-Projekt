<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karte extends CI_Controller {

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
		$this->load->view('karte');
	}
}