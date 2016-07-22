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
        $data['title'] = 'Login';
        $this->load->view('pages/login', $data);
    }
      public function Register() {
        $data['title'] = 'Register';
        $this->load->view('pages/Register', $data);
    }

     public function verifylogin() {
        $data['title'] = 'login';
        $this->load->view('pages/Register', $data);
    }

}
 
?>