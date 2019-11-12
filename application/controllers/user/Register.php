<?php
defined('BASEPATH') OR EXIT('No direct access script allowed');

class Register extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
        $this->load->model('user/insert_m');

	}

    public function index()
    {  
      
    	$this->form_validation->set_rules('username','Fill Username','required');
       $this->form_validation->set_rules('password','Fill Password','required');
      $this->form_validation->set_rules('email','Fill email','required|valid_email|is_unique[user_record.email]');
     
      $this->form_validation->set_rules('gender','Fill gender','required');
      
      if(!$this->form_validation->run() == TRUE)
      {
          $parem['title'] = "Register user here!!";
                  $this->load->view('user/include/header',$parem);
                  $this->load->view('user/register_form',$parem);
                  $this->load->view('user/include/footer');

        
             }
              else
             {
                  $data= array(
                     'username'=>$this->input->post('username'),
                     'password'=>md5($this->input->post('password')),
                     'email'=>$this->input->post('email'),
                     'created_at'=>date('Y-m-d H:i:s',time()),
                     'gender'=>$this->input->post('gender'),
                     'pinboard'=>'activated' );

                $tb_name='user_record';
                $this->insert_m->insertdb($tb_name,$data);
                $this->session->set_flashdata('message','Registration successfully don please Login here!');
                   redirect('user/login');
                
              }
            

                 
    
}
}


?>