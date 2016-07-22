<?php
Class User extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        // Load database
        $this->load->database();

    }


 function login($data)
 {
     if(isset($data['phonenumber']) && isset($data['password']))
     {
         $phonenumber = $data['phonenumber'];
         $password = $data['password'];
     }
     else
     {
         return false;
     }
    
   $this->db->select('id, phonenumber, password');
   $this->db->from('users');
   $this->db->where('phonenumber', $phonenumber);
   $this->db->where('password', MD5($password));
   $this->db->limit(1);

   $query = $this->db->get();

   if($query -> num_rows() == 1)
   {
    foreach ($query->result() as $row)
    {
        $id =  $row->id;
        return $id;
      }
   }
   else
   {
     return false;
   }
 }

 function signup($email, $password)
 {
  $this->email = $email;
  $this->password = $password;
  $this->uuid = $this->gen_uuid();
 }

 function save(){
  $sql = "INSERT INTO users VALUES('".$this->uuid."', ".$this->db->escape($this->email).", '".MD5($this->password)."')";
  $query = $this->db->query($sql);

  if($query)
   {
    return true;
   }
   else
   {
     return false;
   }
 }

 function gen_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

        // 16 bits for "time_mid"
        mt_rand( 0, 0xffff ),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand( 0, 0x0fff ) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand( 0, 0x3fff ) | 0x8000,

        // 48 bits for "node"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}
}
?>
