<?php


class DataModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        //$this->load->database(); bunnarı config/autoload ile hallettik
    }



    public function getPersonnel(){
        $query=$this->db->get('personnel');
        return $query->result();
    }


    public function insertPersonnel($formData){
        return $this->db->Insert('personnel',$formData);
    }
}