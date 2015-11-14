<?php
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function getProfileInfo($username) {
    $profileData = $this->db->get_where('users', array('user_login' => $username));

    foreach ($profileData->result() as $row) {
      $data['email'] = $row->user_login;
      $data['comp_id'] = $row->comp_id;
      $data['user_type'] = $row->usertype;
    }

    return $data;

  }

  public function getUserUsers($comp_id) {
    $users = array();
    $query = $this->db->get_where('users', array('comp_id' => $comp_id));
    foreach($query->result() as $row) {
      $users[]['first_name'] = $row->fname;
      $users[]['last_name'] = $row->lname;
      $users[]['email_address'] = $row->user_login;
      $users[]['work_num'] = $row->worknum;
      $users[]['cell_num'] = $row->cellnum;
      $users[]['user_type'] = $row->usertype;
    }

    return $users;

  }

  public function getUserinfo($user_id) {
    $user = array();
    $query = $this->db->get_where('users', array('user_login' => $user_id));
    foreach ($query->result() as $row) {
      $user['first_name'] = $row->fname;
      $user['last_name'] = $row->lname;
      $user['email_address'] = $row->user_login;
      $user['work_num'] = $row->worknum;
      $user['cell_num'] = $row->cellnum;
      $user['user_type'] = $row->usertype;
    }

    return $user;
  }

}