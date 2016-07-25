<?php

class Application extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user');
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

    public function chat() {
        $data['title'] = 'Chat';
        $this->load->view('pages/chat', $data);
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

    public function Dashboard()
    {
        $data['title'] = 'you are home';
        $this->load->view('pages/Dashboard', $data);
    }

       public function activities()
    {
        $data['title'] = 'your activities';
        $this->load->view('pages/activities', $data);
    }

      public function events()
    {
        $data['title'] = 'there are events you can attend. earn more pointd';
        $this->load->view('pages/Events', $data);
    }

}