<?php 
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
  class Verifylogin extends CI_Controller 
  {

     function __construct()
     {
       parent::__construct();
        // Load session library
        
        $this->load->library('session');
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
        $this->load->model('user');
        
     }

     function index()
     {
       
       

     }

     function logout()
     {
       $this->session->unset_userdata('logged_in');
       session_destroy();
       redirect('home', 'refresh');
     }

  }

?>