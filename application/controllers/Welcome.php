<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

 public function index()
	 {
	 	  $data['title'] = "Welcome page";
         if($this->session->userdata('username'))
         {
            return redirect('user/Dashboard/mainpage');
         }
          if($this->session->userdata('type'))
          {
            return redirect('admin/admin/authentication');
          }
              $this->load->view('user/include/header',$data);
              $this->load->view('welcome_view',$data);
              $this->load->view('user/include/footer');
	 } 

     public function logout()
    {
      $this->session->unset_userdata('username');
      $this->session->sess_destroy();
      redirect('welcome');
      
    }
}
