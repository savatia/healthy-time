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

    public function get($data)
    {
        $query = $this->db->get_where($this->table, $data);
        $result = $query->result(); 
        return $result;
    }
}
?>
