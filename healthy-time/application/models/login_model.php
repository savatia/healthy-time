	 <!-- // test -->
  <?php
  			//login

Class User extends CI_Model
{
	 function login($username, $password)
	 {
		   $this -> db -> select('id, phonenumber, password');
		   $this -> db -> from('users');
		   $this -> db -> where('phonenumber', $username);
		   $this -> db -> where('password', MD5($password));
		   $this -> db -> limit(1);
		 
		   $query = $this -> db -> get();
		 
		   if($query -> num_rows() == 1)
		   {
		     return $query->result();
		   }
		   else
		   {
		     return false;
		   }
	 }
}
?> 	