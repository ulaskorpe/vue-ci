<?php
 class User extends CI_Model {
     public function __construct()
     {
         parent::__construct();
      //   $this->load->database();
     }


     function loginControl($email,$password){
        $this->db->where('email',$email);
      //  $this->db->where('password',$password);
        $query = $this->db->get('users');
           return  ( $query->num_rows() >0) ? $query : false ;

     }


 }