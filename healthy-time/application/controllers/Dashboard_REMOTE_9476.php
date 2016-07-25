<?php

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load form helper library
        $this->load->helper('form');
        // Load form validation library
        $this->load->library('form_validation');
        // Load session library
        $this->load->library('session');
        // Load database
        $this->load->model('user');
        // Load database
        $this->load->database();
    }

    public function index()
    {
        if(!($data['phonenumber'] = $this->isLoggedIn()) )
        {
            $this->load->view('pages/home');
        } 
        $user_details = $this->user->get($data);

        foreach ($user_details as $row) {
            $data['name'] = $row->name;
            $data['points'] = $row->points;
            $data['role'] = $row->role;       
        }
        $this->load->view('pages/dashboard', $data);
    }

    private function isLoggedIn()
    {
        if($uid = $this->session->userdata('uid'))
		    return $uid;
        return false;
    }  


}