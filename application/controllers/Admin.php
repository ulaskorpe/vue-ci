<?php


class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }


    public function index(){

        if(!empty($this->session->email)){
            $this->load->view('admin');
        }else{
            redirect('Login/index');
        }


    }
}