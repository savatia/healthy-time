<?php

class Application extends CI_Controller {
    public function index() {
        $data['title'] = 'Home';

        $this->load->view('pages/index', $data);
    }


} // class end
?>