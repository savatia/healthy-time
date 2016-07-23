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
        // Load database
        $this->load->database();
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

    public function health_facilities()
    {
        $data['title'] = 'Health Facilities';
        $this->load->view('pages/health_facilities', $data);
    }

    public function Login() 
    {
        if($id =  $this->user->login($_POST) )
        {
            extract($_POST);
            $this->session->set_userdata(array('uid' => $id ));
            redirect('application/home', 'refresh');
        }
        else
        {
            redirect('application/account#login', 'refresh');
        }
    }

    public function Register() 
    {
        if($phonenumber = $this->user->register($_POST))
        {
            extract($_POST);
            $this->session->set_userdata(array('uid' => $phonenumber ));
            redirect('application/home', 'refresh');
        }
        else
        {
            redirect('application/account#signup', 'refresh');
        }
    }

    public function FAQ()
    {
        $data['title'] = 'Frequently Asked Questions';
        $this->load->view('pages/faq', $data);
    }
}
 
?>
