<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    private $compID;
    private $userID;

    function __construct() {
        parent::__construct();
/*        if (!$this->session->all_userdata('is_logged_in')) {
            redirect('login/index');
        } else {
            $this->compID = $this->session->userdata('comp_id');
            $this->userID = $this->session->userdata('email');
        }*/
    }

    /**
     * Loads the home page for the user
     * 
     */
    public function index() {
        $this->load->view('home/header');
        $this->load->view('dashboard/index');
        $this->load->view('home/footer');
    }



}

/*End of file*/
