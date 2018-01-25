
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.
     * hp/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
 

         $this->load->view('index');

	    //redirect(base_url('/Login'));

		//$this->load->view('welcome_message');
	}

	public function vue_cart(){

	    $this->load->view('vue_cart');
    }



    public function getParameters(){

	    $param1 = $this->uri->segment(5);

	    echo $param1;

    }

    public function component(){

        $this->load->view('component_view');

    }
    public function component2(){

        $this->load->view('component2_view');

    }

    public function vue_instance(){
        $this->load->view('vue_instance');
    }
    public function vue_punchbag(){
        $this->load->view('vue_punchbag');
    }

    public function event_bus(){
        $this->load->view('event_bus');
    }

    public function vue_form(){
        $this->load->view('vue_form');
    }

    public function post_form(){


        $data = json_decode($this->input->post('data'));



   /*      $array=['title','content','categories','author'];
        $data = [];

        foreach ($array as $a){
            $data[$a] =[$a=>$this->input->post($a) ];
        }

        $d_insert =[
          'title'=>$this->input->post('title'),
          'data'=>$this->input->post('content').":".$this->input->post('author'),
          'type'=>1
        ];*/

        //$this->db->insert('tmp',$d_insert);


        $request_body = file_get_contents('php://input');
        $data = json_decode($request_body);

      //  $gelen = json_encode($data);


        $this->db->query("INSERT INTO tmp (title,data,type) VALUES ('".$data->title."','".$data->content."',".date('mdHis').")");

//        var_dump($data);
//        die();
//       for($i=0;$i<1000;$i++){
//            $data[]=[
//                'id'=>$i,
//                'data'=>rand(100,20000)
//            ];
//        }

    //    echo date("YmdHis");

      // return $data;
      //  exit(json_encode($d_insert));
       // echo "ok";

    }


    public function get_blogs(){

      /*  for($i=0;$i<10;$i++){
            $data[]=[
                'id'=>$i,
                'title'=>'abc',
                'body'=>rand(100,20000)
            ];
        }*/

      $data= $this->db->query("SELECT * FROM tmp")->result();

         // return $data;
         exit(json_encode($data));
    }


}
