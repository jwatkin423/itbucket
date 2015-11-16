<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	private $compID;
	private $userID;

	function __construct() {
		parent::__construct();
		if (!$this->session->all_userdata('is_logged_in')) {
			redirect('login/index');
		} else {
			$this->compID = $this->session->userdata('comp_id');
			$this->userID = $this->session->userdata('email');
		}
	}

	/**
	 * Loads the home page for the user
	 * 
	 */
	public function index() {
		$data['clients'] = $this->clients();
		$data['clients_form_info'] = $this->config->item('clients_form');
		$this->load->view('home/header');
		$this->load->view('members/index.php', $data);
		$this->load->view('home/footer');
	}

	/**
	 * Gets the clients associated with the user
	 *
	 * @return  array Clients
	 */

	public function clients() {
		$this->load->model('clients_model');

		return $this->clients_model->getClients($this->compID);

	}

	/**
	 * Get the users associated with the user
	 * @return  array Users
	 */

	public function users() {
		$this->load->model('users_model');
		$data['users'] = $this->users_model->getUserUsers($this->compID);

		var_dump($data);
		// return $data;

	}

	/**
	 * Get the user's info
	 * @return  array User info
	 */

	public function userProfile() {
		$this->load->model('users_model');
		$data['profile'] = $this->users_model->getUserInfo($this->userID);

		// return $data;
		var_dump($data);

	}

	/**
	 * Get dashboard info
	 * @return  array Dashboard info
	 */

	public function dashboard() {
		$this->load->model('dashboard_model');
		$data['dashboard'] = $this->dashboard_model->index($this->compId, $this->userID);

		var_dump($data);
		// return $data;

	}

}

/*End of file*/
