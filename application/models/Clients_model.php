<?php
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients_model extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function getClients($comp_id) {
    $clientsInfo = array();
    $clients = $this->db->get_where('clients', array('comp_id' => $comp_id));

    foreach ($clients->result_array() as $row) {
      $clientsInfo[$row['clnum']]['client_name'] = $row['clientname'];
      $clientsInfo[$row['clnum']]['client_number'] = $row['clnum'];
      $clientsInfo[$row['clnum']]['address1']    = $row['address1'];
      $clientsInfo[$row['clnum']]['address2']    = $row['address2'];
      $clientsInfo[$row['clnum']]['city']        = $row['city'];
      $clientsInfo[$row['clnum']]['state']       = $row['state'];
      $clientsInfo[$row['clnum']]['zip']         = $row['zip'];
      $clientsInfo[$row['clnum']]['num']         = $row['num'];
    }

    return $clientsInfo;

  }

  public function getClientByID($id) {
    $results = $this->db->get_where('clients', array('clnum' => $id));
    $info = $results->result_array();

    $clientInfo['client_name'] = $info[0]['clientname'];
    $clientInfo['client_clnum'] = $info[0]['clnum'];
    $clientInfo['client_number'] = $info[0]['num'];
    $clientInfo['address1']    = $info[0]['address1'];
    $clientInfo['address2']    = $info[0]['address2'];
    $clientInfo['city']        = $info[0]['city'];
    $clientInfo['state']       = $info[0]['state'];
    $clientInfo['zip']         = $info[0]['zip'];
    $clientInfo['cfname']         = $info[0]['cfname'];
    $clientInfo['clname']         = $info[0]['clname'];
    $clientInfo['mlocs']         = $info[0]['mlocs'];
    $clientInfo['comp_id']         = $info[0]['comp_id'];

    // dd($clientInfo);

    return $clientInfo;
  }

  public function editClientByID($id, $client) {
    $this->db->where('clnum', $id);
    $response = $this->db->update('clients', $client);
    return $response;
  }

  public function getClientInfoByID($id) {
    $tables = $this->db->list_tables();
    $NOT_IN_ARRAY = array('clients', 'company', 'items_perm_set', 'users');
    foreach ($tables as $table) {
      if (!in_array($table, $NOT_IN_ARRAY)) {
        $results = $this->db->get_where($table, array('clnum' => $id));
        $clientInfo[$table] = $results->result_array();
      }
    }

    return $clientInfo;

  }

}