<?php

class SessionController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
       //  $this->session->set_userdata("login_id",666);
    }

    public function set_session($data){
        return $this->session->set_userdata($data['name'],$data['value']);
    }

    public function get_session($data){
        return $this->session->userdata($data);
    }
}