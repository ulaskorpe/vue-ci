<?php
 class ActiveRecord extends CI_Controller{

     public function __construct()
     {
         parent::__construct();
     }


     public function index(){


         $this->load->view('personnel_active');
     }


     public function create(){

     }

     public function update(){

     }

     public function delete(){

     }
 }