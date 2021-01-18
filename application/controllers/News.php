<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	private $cards;
	private $uploadedImage = '';

	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
    	$this->load->model('news_model');

		$config['upload_path'] = './assets/pics/news';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 5000;
		$this->load->library('upload', $config);

		$this->cards = $this->loadEventCards();
	}

	public function index()
	{
		$data['cards'] = $this->cards;
		$this->load->view('news', $data);
	}

	public function validation($fileFlag = true) {
		$this->form_validation->set_rules('news_title', 'Titel', 'trim|required');
		$this->form_validation->set_rules('news_description', 'Beschreibung', 'trim|required');
		if (empty($_FILES['news-image']['name']) && $fileFlag)
			$this->form_validation->set_rules('news-image', 'Bild', 'required');

		if($this->form_validation->run() && ($this->upload->do_upload('news-image') || !$fileFlag)) {
			$this->uploadedImage = $this->upload->data()['file_name'] | '';
			return true;
		} else {
			$data['upload_error'] = $this->upload->display_errors();
			$data['err_title'] = $this->input->post('news_title');
			$data['err_description'] = $this->input->post('news_description');
			$data['cards'] = $this->cards;
			$this->load->view('news', $data);
			return false;
		}
	}

	public function createCard() {
		if($this->validation()) {
			$this->news_model->insertCard(
				$this->input->post('news_title'), 
				$this->input->post('news_description'), 
				$this->uploadedImage,
				$this->session->userdata('id')
			);
			redirect('news');
		}
	}

	public function editCard() {
		$fileFlag = boolval($this->input->post('file-flag'));
		if($this->validation($fileFlag)) {
			$this->news_model->updateCard(
				$this->input->post('card-id'),
				$this->input->post('news_title'),
				$this->input->post('news_description'),
				$this->uploadedImage
			);
			
			if(!empty($this->uploadedImage)) 
				unlink($_SERVER['DOCUMENT_ROOT'] . '/assets/pics/news/' . $this->input->post('old-image'));

			redirect('news');
		}
	}

	public function loadEventCards() {
		$data = $this->news_model->getAllCards();

		return $data;
	}

	public function deleteCard() {
		$this->news_model->deleteCardByID($this->input->post('id'));

		unlink($_SERVER['DOCUMENT_ROOT'] . '/assets/pics/news/' . $this->input->post('img'));
	}
}