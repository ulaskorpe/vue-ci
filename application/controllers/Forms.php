<?php


class Forms extends CI_Controller{


    public function __construct()
    {
            parent::__construct();
    }

    public function index(){
        $this->load->view('form');
    }

    public function create(){
         $isim = $this->input->post('isim');
         $email = $this->input->post('email');

         echo $isim.":".$email;
    }

    public function xz(){
        echo "xz fx";
    }

}