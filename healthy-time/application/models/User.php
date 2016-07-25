<?php
Class User extends CI_Model
{
    private $table = 'users';

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
                return $phonenumber;
            }
        }
        else
        {
            return false;
        }
    }

    function register($data)
    {
        if(isset($data['phonenumber']) && isset($data['password']))
        {
            $phonenumber = $data['phonenumber'];
            $password = $data['password'];
            $data['password'] = MD5($password);
        }
        if(isset($data['phonenumber']))
        {
            $phonenumber = $data['phonenumber'];
        }
        else
        {
            return false;
        }

        if($this->db->insert('users', $data))
        {
            return $phonenumber;
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
