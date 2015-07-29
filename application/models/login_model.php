<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function login($username, $password) {
		$query = $this->db->get_where('users', array('user_login' => $username, 'user_pwd' => $password));

		if (count($query->row_array()) == 1) {
			return true;
		} else {
			return false;
		}

	}

}