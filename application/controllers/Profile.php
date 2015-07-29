<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}

	public function index() {
		$this->load->view('home/header');
		$this->load->view('profile/index');
		$this->load->view('home/footer');
	}

	public function editProfile() {

	}



}