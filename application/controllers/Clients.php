<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

	private $compID;
	private $userID;

	function __construct() {
		parent::__construct();
		if (!$this->session->all_userdata('is_logged_in')) {
			redirect('login/index');
		} else {
			$this->compID = $this->session->userdata('comp_id');
			$this->userID = $this->session->userdata('email');
			$this->load->model('clients_model');
		}
		$this->load->library('tablemappings');
	}

	/**
	 * Loads the home page for the user
	 * 
	 */
	public function index() {
		$data['clients'] = $this->clients();

		$this->load->view('home/header');
		$this->load->view('admin/index.php', $data);
		$this->load->view('home/footer');
	}

	/**
	 * Gets the clients associated with the user
	 *
	 * @return  array Clients
	 */

	public function clients() {
		return $this->clients_model->getClients($this->compID);
	}

	public function getClientByID() {
		$id = $this->input->get('id');
		$data['client_info'] = $this->clients_model->getClientByID($id);
		echo json_encode($data);
		return $data;

	}

	public function editClientByID() {
		$client = array();
		$id = $this->input->post('id');
		$client['clientname'] = $this->input->post('clientName');
		$client['address1'] = $this->input->post('clientAddress1');
		$client['address2'] = $this->input->post('clientAddress2');
		$client['city'] = $this->input->post('clientCity');
		$client['state'] = $this->input->post('clientState');
		$client['zip'] = $this->input->post('clientZip');
		$client['num'] = $this->input->post('clientNumber');
		$client['cfname'] = $this->input->post('clientCFName');
		$client['clname'] = $this->input->post('clientCLName');
		$client['mlocs'] = $this->input->post('clientMlocs');
		$response = $this->clients_model->editClientByID($id, $client);
		$data['client_status'] = $response;
		echo json_encode($data);
	}

	public function viewClient() {
		$id = $this->input->get('id');
		$data['info'] = $this->clients_model->getClientInfoByID($id);
		$this->load->view('home/header');
		$this->load->view('clients/index', $data);
		$this->load->view('home/footer');
	}

}

/*End of file*/
