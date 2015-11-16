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
			$this->load->model('profile_model');
			$email = $this->input->post('email');
			$profile = $this->profile_model->getProfileLogin($email);
			$profile['is_logged_in'] = 1;
			$this->session->set_userdata($profile);
			redirect('members/index');
		} else {
			$this->load->view('home/header');
			$this->load->view('login/index');
			$this->load->view('home/footer');
		}
	}

	public function oauth() {
		$this->load->model('login_model');
		if ($this->login_model->login()) {
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