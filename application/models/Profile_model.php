<?php
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getProfileLogin($username) {
		$profileData = $this->db->get_where('users', array('user_login' => $username));

		if ($profileData->num_rows() == 1) {
			echo "results have been found";
			foreach ($profileData->result() as $row) {
				$data['email'] = $row->user_login;
				$data['comp_id'] = $row->comp_id;
			}

			return $data;
		}

		return false;
	}

	public function getProfileInfo($username) {
		$profileData = $this->db->get_where('users', array('user_login' => $username));

		if ($profileData->num_rows() >=1) {
			foreach ($profileData->result() as $row) {
				$data['user_id'] = $row->user_id;
				$data['company_id'] = $row->comp_id;
				$data['company_name'] = $row->company_name;
				$data['first_name'] = $row->fname;
				$data['last_name'] = $row->lname;
				$data['email_address'] = $row->user_login;
				$data['address1'] = $row->address1;
				$data['address2'] = $row->address2;
				$data['city'] = $row->city;
				$data['state'] = $row->state;
				$data['zip'] = $row->zip;
				$data['work_number'] = $row->worknum;
				$data['cell_number'] = $row->cellnum;
				$data['alt_number'] = $row->altnum;
				$data['user_type'] = $row->usertype;
				$data['permset'] = $row->permset;
			}

			return $data;
		}

		return false;

	}

}