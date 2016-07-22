
 <?php
class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
 	$this->load->model('login_model');
 	echo "were at login";
   $this->load->helper(array('form'));

 }

 function open_login()
 {
 	echo "login called";
 	$this->load->view('empty');
 }
 
}
 
?>
