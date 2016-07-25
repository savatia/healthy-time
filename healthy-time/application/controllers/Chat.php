<?php

class Chat extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load form helper library
        $this->load->helper('form');
        // Load form validation library
        $this->load->library('form_validation');
        // Load session library
        $this->load->library('session');
        // Load database
        $this->load->model('user');
        $this->load->model('chatmodel');
        $this->load->model('messagemodel');
        // Load database
        $this->load->database();
    }

    public function index()
    {
        $user_id;
        if(!($user_id = $this->isLoggedIn()) )
        {
            $this->load->view('pages/index');
            return;
        }
        $chat_id;
        $chat = $this->chatmodel->getCurrent();
        if($chat == null) {
            $data['title'] = 'Pambana Healthcare';
            $this->load->view('pages/index', $data);
        }

        foreach ($chat as $row)
        {
            if(($chat_id = $row->id) == null)
            {
                echo 'No active chats!';
                return;
            }
        }
        $messages = $this->messagemodel->getChatMessages($chat_id);
        $data['title'] = 'Chat with a Counsellor';
        $data['messages'] = $messages;
        $data['user_id'] = $user_id;
        $this->load->view('pages/chat', $data);
    }

    public function reply()
    {
        $chat_id;
        $chat = $this->chatmodel->getCurrent();
        
        foreach ($chat as $row)
        {
            if(($chat_id = $row->id) == null)
            {
                echo 'No active chats!';
                return;
            }
        }


        if( !($_POST['user_id'] = $this->isLoggedIn() ) )
        {
            return 'Not logged in!';
        }
        $_POST['chat_id'] = $chat_id;
        print_r($this->messagemodel->insert($_POST));

    }

    private function isLoggedIn()
    {
        if($uid = $this->session->userdata('uid'))
		    return $uid;
        return false;
    }  
}

?>