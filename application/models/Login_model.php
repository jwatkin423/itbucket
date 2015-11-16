<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function login() {
    $username = $this->input->post('email');
    $password = hash('sha256', $this->input->post('password'));
    $query = $this->db->get_where('users', array('user_login' => $username, 'user_pwd' => $password));

    if ($query->num_rows() == 1) {
      return true;
    } else {
      return false;
    }

  }

}