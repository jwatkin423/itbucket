<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();

	}

	public function index() {
		$this->load->view('home/header');
		$this->load->view('login/index');
		$this->load->view('home/footer');
		// $this->load->template('home/index');
	}

	public function formValidation() {
		// Load form validation
		$this->load->library('form_validation');
		// Validate login data
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|callback_oauth');
		$this->form_validation->set_rules('password', 'password', 'required|trim');

		if ($this->form_validation->run()) {
			$this->load->model('Profile_model');
			$profile = $this->profile_model->getProfileInfo($this->input->post('email'));
			$data['profile'] = $profile;
			$this->load->view('home/header');
			$this->load->view('admin/index.php', $data);
			$this->load->view('home/footer');
		} else {
			$this->load->view('home/header');
			$this->load->view('login/index');
			$this->load->view('home/footer');
		}
	}

	public function oauth() {
		$this->load->model('login_model');
		if ($this->login_model->oauth()) {
			return true;
		} else {
			$this->form_validation->set_message('oauth', 'Incorrent username/password.');
			return false;
		}
	}

	public function reset() {
		/*$this->load->view('home/header');
		$this->load->view('login/reset', $data);
		$this->load->view('home/footer');*/
	}

	public function resetSuccess() {
		$this->load->view('home/header');
		$this->load->view('login/reset');
		$this->load->view('home/footer');
	}


}