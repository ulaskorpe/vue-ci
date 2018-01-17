<?php


class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('User');

    }


   public function index(){
        $this->load->view('login');
    }

    public  function loginControl(){

        if(isset($_POST['login'])) {
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            if($this->form_validation->run() == TRUE){
                $email = $this->input->post('email');
                $pw = $this->input->post('password');
                $result = $this->User->loginControl($email,$pw);
                if(!empty($result)){

                  //  var_dump($result);
                    //set session
                     $sessinData=array('email'=>$email);
                     $this->session->set_userdata($sessinData);
                 //    redirect("Admin/index");
                    echo "giriş yapıldı";
                }else{
                    echo "hatalı kullanıcı";
                }
            }else{
                $data['validation_error']= "tüm alanları doldurun";
                $this->load->view('login',$data);
            }

        }///if post
    }


    public function logOut(){

        session_destroy();
    }


}