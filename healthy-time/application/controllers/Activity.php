<?php

class Activity extends CI_Controller {
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
        $data['title'] = 'Index';
        $this->load->view('pages/index', $data);
    }
    
    public function chat()
    {
        $data['title'] = 'Chat With A Doctor';
        $this->load->view('pages/chat', $data);
    }

    public function quiz()
    {
        $data['title'] = 'Take a quiz';
        $this->load->view('pages/quiz', $data);
    }
}