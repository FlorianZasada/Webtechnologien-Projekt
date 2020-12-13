<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Controller für unsere Startseite
	 * der Controller lädt zuerst die landing_page
	 * 
	 * Das laden einer View erfolgt mittels:
	 * $this->load->view('name der view');
	 * Beispiel:
	 * $this->load->view('landing_page');
	 */

  public function __construct() {

    parent::__construct();
    if(null == $this->session->userdata('admin')) redirect('home');

    $this->load->model('admin_model');
  }

	public function index()
	{
		//AUFGABE: laden Sie 4.0
    $data['lastnames'] = $this->admin_model->getUserLastNames();

		$this->load->view('admin_page', $data);
	}

  public function userLastNames() {
    $data = $this->admin_model->getUserLastNames();
    
    echo json_encode($data);
  }
}