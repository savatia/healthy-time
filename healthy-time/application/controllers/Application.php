<?php

class Application extends CI_Controller {
    public function index() {
        $data['title'] = 'Home';
        $this->load->view('pages/index', $data);
    }

    public function home() {
        $data['title'] = 'Home';
        $this->load->view('pages/index', $data);
    }

    public function account() {
        /* Load form helper */
        $this->load->helper(array('form'));

        /* Load form validation library */
        $this->load->library('form_validation');
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
        /* Load form helper */
        $this->load->helper(array('form'));

        /* Load form validation library */
        $this->load->library('form_validation');
        $data['title'] = 'Login';
        $this->load->view('pages/login', $data);
    }
      public function Registration() {
        $data['title'] = 'Register';
        $this->load->view('pages/Register', $data);
    }
} 
?>