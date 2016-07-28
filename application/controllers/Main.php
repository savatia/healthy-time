<?php

class Main extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user');
        $this->load->database();
    }

    public function index() {
        if(!($data['phonenumber'] = $this->isLoggedIn()) )
        {
            $this->load->view('pages/index');
            return;
        } 
        $user_details = $this->user->get($data);
        foreach ($user_details as $row) {
            $data['name'] = $row->name;
            $data['points'] = $row->points;
            $data['title'] = 'Dashboard'; 
            $data['role'] = $row->role;       
        }
        $this->load->view('pages/dashboard', $data);
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
            redirect('/dashboard', 'refresh');
        }
        else
        {
            redirect('/account#login', 'refresh');
        }
    }

    public function Register() 
    {
        if($phonenumber = $this->user->register($_POST))
        {
            extract($_POST);
            $this->session->set_userdata(array('uid' => $phonenumber ));
            redirect('/home', 'refresh');
        }
        else
        {
            redirect('/account#signup', 'refresh');
        }
    }

    public function FAQ()
    {
        $data['title'] = 'Frequently Asked Questions';
        $this->load->view('pages/faq', $data);
    }

    public function logout(){

    }

    private function isLoggedIn()
    {
        if($uid = $this->session->userdata('uid'))
            return $uid;
        return false;
    }  
}