<?php

class PersonnelModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }


    public function getPersonnel(){
       return $this->db->query("SELECT A.*,B.name as city_name FROM personnel AS A LEFT JOIN cities AS B ON A.city_id=B.id ORDER BY A.id")->result();
    }



}