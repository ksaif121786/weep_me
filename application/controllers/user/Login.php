<?php
//defined('BASEPATH') OR EXIT('No direct access script allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
       
         $this->load->model('admin/Admin_m');
         $this->load->model('user/login_m');
          $this->admin_logged();
         $this->user_logged();
         
	}
   private function admin_logged()
   {
    if($this->session->userdata('type'))
    {
      return redirect('admin/admin/authentication');
    }
  }

    private function user_logged()
   {
    if($this->session->userdata('username'))
    {
      return redirect('user/Dashboard');
    }
  }

    public function index()
    {
      $data['title'] = "Login user";
    	$this->form_validation->set_rules('email','Fill Email','required');
        $this->form_validation->set_rules('password','Fill Password','required');
        if($this->form_validation->run() == true)
        {
           
            $email=$this->input->post('email');
            $password=md5($this->input->post('password'));
                     
           
           // $tb_name='user_record';
              $username=$this->login_m->UserExist($email,$password);
              
              $type=$this->Admin_m->adminExist($email,$password);
          

           
               if($username)
               {
                $userdata=array(
                               'id'=>$username->id,
                               'username'=>$username->username,
                               'email'=>$username->email,
                               'pinboard'=>$username->pinboard
                );
                 $this->session->set_userdata($userdata);
                 return redirect('user/Dashboard/mainpage');
               }
               elseif ($type) {
                      $admindata=array(
                               'id'=>$type->id,
                               'type'=>$type->type,
                               'admin'=>$type->admin,
                               
                );

                   $this->session->set_userdata($admindata);
                   return redirect('admin/admin/authentication');
               }else
               {
                $this->session->set_flashdata('error','Please Check Your Email or Password,try Again!');
                       return redirect('user/login');
               
               }
         }
           else
           {

             $this->load->view('user/include/header',$data);
              $this->load->view('welcome_view',$data);
              $this->load->view('user/include/footer');
           }
    }


  
    
}


?>