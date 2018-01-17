<?php

class PersonnelController extends CI_Controller {


    public function __construct()
    {

        parent::__construct();
        $this->load->model('PersonnelModel');

    }


    public function index()
    {
        //print_r( $this->session->all_userdata());
        //echo $this->session->userdata('login_id');
    //    $data['personnel'] = $this->DataModel->getPersonnel();
        ///tüm sonuçlar
      //  $data['personnel'] = $this->db->get('personnel')->result();
        /*   $data['personnel'] = $this->db
             ->where('id >',3)
           ->where('id >',3)
             ->where('id <',13)
             ->where_not_in('id',[12])
             ->or_where('id=',55)
        //    ->or_where_in('id',array(58,69,64))
            ->like('name','Miss')
            ->order_by('name desc')->order_by('id','random')->limit(2)
            ->get('personnel')->result();*/
        $data['personnel'] = $this->PersonnelModel->getPersonnel();


       // echo $this->db->last_query();
        ///tek sonuç
        //$data['personnel'] = $this->db->get('personnel')->row();
        $data['cities']=$this->db->query("SELECT * FROM cities ORDER BY name")->result();


        //var_dump($data);
        $this->load->view('personnel',$data);
    }

    public function update($id=0) {

        if(!empty($this->input->post('id'))){
            echo "updated";
            $id=$this->input->post('id');
            $data = array(
                'name'=>$this->input->post('name'),
                'gender'=>$this->input->post('gender'),
                'city_id'=>$this->input->post('city_id'),
                'address'=>$this->input->post('address'),
                'email'=>$this->input->post('email')
            );


          $result =  $this->db->where('id',$id)->update('personnel',$data);

          echo "[".$result."]";

            $data['personnel']=$this->db->query("SELECT * FROM personnel WHERE id=".$id)->row();
        }else{
            $data['personnel']=$this->db->query("SELECT * FROM personnel WHERE id=".$id)->row();
        }


        $data['cities']=$this->db->query("SELECT * FROM cities ORDER BY name")->result();
        $this->load->view('personnel_update',$data);
    }

    public function delete($id = 0){
        $result = $this->db->where('id',$id)->delete('personnel');
        if($result){
            redirect(base_url('/personnel'), 'refresh');
        }

    }

    public function Insert(){

        $formData = array(

            'name'=>$this->input->post('name'),
            'gender'=>$this->input->post('gender'),
            'address'=>$this->input->post('address'),
            'city_id'=>$this->input->post('city_id'),
            'email'=>$this->input->post('email')
        );

        if(!empty($_FILES['photo_file'])){

            $config['upload_path']          = 'uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            /*  $config['max_size']             = 100;
              $config['max_width']            = 1024;
              $config['max_height']           = 768;*/

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('photo_file'))
            {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                die();
                //$this->load->view('upload_form', $error);
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                $formData['photo_file']=$data['upload_data']['file_name'];

               // print_r($data['upload_data']['file_name']);

                //  $this->load->view('upload_success', $data);
            }

        }//file

    

        $result =  $this->db->insert('personnel',$formData); //$this->DataModel->insertPersonnel($formData);
        if($result){
                echo $this->db->insert_id();
            //redirect('/PersonnelController/index');
        }else{
            echo $result;
        }


    }


}
