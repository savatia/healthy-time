<?php

class Application extends CI_Controller {

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
    }
    public function index() {
        $data['title'] = 'Home';
        $this->load->view('pages/index', $data);
    }

    public function home() {
        $data['title'] = 'Home';
        $this->load->view('pages/index', $data);
    }

    public function account() {
        $data['title'] = 'Login | Signup';
        $this->load->view('pages/login_signup', $data);
    }

    public function health_facilities() {
        $data['title'] = 'Health Facilities';
        $this->load->view('pages/health_facilities', $data);
    }

    public function chat() {
        $data['title'] = 'Chat With A Doctor';
        $this->load->view('pages/chat', $data);
    }
      public function Login() {

// Check validation for user input in SignUp form
          $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
          $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
          $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        $data['title'] = 'Login';
        $this->load->view('pages/login', $data);
    }
      public function Registration() {
        $data['title'] = 'Register';
        $this->load->view('pages/Register', $data);
    }

    public function verifylogin(){
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $this->load->view('pages/index', $data);
        }
        else
        {
            //If no session, redirect to login page
            $this->account();
        }
    }
} 
?>