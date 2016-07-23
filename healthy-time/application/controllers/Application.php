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
        if($id =  $this->user->login($_POST) )
       {
         extract($_POST);
         $this->session->set_userdata(array('uid' => $id ));
         redirect('application/home', 'refresh');
       }
       else{

          redirect('application/login', 'refresh');
       }
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
