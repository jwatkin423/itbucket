<?php 
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getProfile($username) {
		$this->db->get_where('')
		$this->db->get_where('clients', array(''));

	}

}