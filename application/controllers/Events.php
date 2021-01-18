<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	private $cards;
	private $uploadedImage = '';

	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
    	$this->load->model('event_model');

		$config['upload_path'] = './assets/pics/events';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 5000;
		$this->load->library('upload', $config);

		$this->cards = $this->loadEventCards();
	}

	public function index()
	{
		$data['cards'] = $this->cards;
		$this->load->view('events', $data);
	}

	public function validation($fileFlag = true) {
		$this->form_validation->set_rules('events_title', 'Titel', 'trim|required');
		$this->form_validation->set_rules('events_description', 'Beschreibung', 'trim|required');
		if (empty($_FILES['events-image']['name']) && $fileFlag)
			$this->form_validation->set_rules('events-image', 'Bild', 'required');

		if($this->form_validation->run() && ($this->upload->do_upload('events-image') || !$fileFlag)) {
			$this->uploadedImage = $this->upload->data()['file_name'] | '';
			return true;
		} else {
			$data['upload_error'] = $this->upload->display_errors();
			$data['err_title'] = $this->input->post('events_title');
			$data['err_description'] = $this->input->post('events_description');
			$data['cards'] = $this->cards;
			$this->load->view('events', $data);
			return false;
		}
	}

	public function createCard() {
		if($this->validation()) {
			$this->event_model->insertCard(
				$this->input->post('events_title'), 
				$this->input->post('events_description'), 
				$this->uploadedImage,
				$this->session->userdata('id')
			);
			redirect('events');
		}
	}

	public function editCard() {
		$fileFlag = boolval($this->input->post('file-flag'));
		if($this->validation($fileFlag)) {
			$this->event_model->updateCard(
				$this->input->post('card-id'),
				$this->input->post('events_title'),
				$this->input->post('events_description'),
				$this->uploadedImage
			);
			
			if(!empty($this->uploadedImage)) 
				unlink($_SERVER['DOCUMENT_ROOT'] . '/assets/pics/events/' . $this->input->post('old-image'));

			redirect('events');
		}
	}

	public function loadEventCards() {
		$data = $this->event_model->getAllCards();

		return $data;
	}

	public function deleteCard() {
		$this->event_model->deleteCardByID($this->input->post('id'));

		unlink($_SERVER['DOCUMENT_ROOT'] . '/assets/pics/events/' . $this->input->post('img'));
	}
}