<?php
Class ChatModel extends CI_Model
{
    private $table = 'chats';

    function __construct()
    {
        parent::__construct();
        // Load database
        $this->load->database();
        // Load session library
        $this->load->library('session');

    }

    public function create()
    {
        if( !($user_id = $this->isLoggedIn() ) )
        {
            return false;
        }

        $data = array('id' => UUID(), 
                        'user_id' => $user_id,
                        'done' => false
                        );
        $this->db->insert($this->table, $data);

    }

    public function getCurrent()
    {
        if( !($user_id = $this->isLoggedIn() ) )
        {
            return false;
        }
        echo $user_id;
        $this->db->where('`user_id` = \''.$user_id.'\' AND `started_at` > \''. date('Y-m-d H:i:s',time()  - (7 * 24 * 60 * 60 )) .'\'');
        $this->db->from($this->table); 
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->result();
        return $result;

    }

    private function isLoggedIn()
    {
        if($uid = $this->session->userdata('uid'))
		    return $uid;
        return true;
    }  
}
?>