<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function index($compid, $username) {
    $data[] = "The dashboard data coming soon";

    return $data;

  }

}