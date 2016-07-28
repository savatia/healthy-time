<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class MessageModel extends CI_Model
{
    private $table = 'messages';

    function __construct()
    {
        parent::__construct();
        // Load database
        $this->load->database();

    }

    public function insert($data)
    {
        if( !($user_id = $this->isLoggedIn() ) )
        {
            return false;
        }
        $data['id'] = UUID();
        $this->db->insert($this->table, $data);
        return $data;
    }

    public function get($data)
    {
        $query = $this->db->get_where($this->table, $data);
        $result = $query->result(); 
        return $result;
    }

    public function getMessage($id)
    {
        $data = array('id' => $id);
        return $this->get($data);
    }

    public function getChatMessages($chat_id)
    {
        $data = array('chat_id' => $chat_id);
        return $this->get($data);
    }

    public function getUserChatMessages($chat_id, $user_id)
    {
        $data = array('chat_id' => $chat_id, 'user_id' => $user_id);
        return $this->get($data);
    }

    private function isLoggedIn()
    {
        if($uid = $this->session->userdata('uid'))
		    return $uid;
        return true;
    }  
}