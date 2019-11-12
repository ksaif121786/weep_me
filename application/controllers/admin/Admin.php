<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
    $this->valid_logged();
		$this->load->model('admin/admin_m','m');
	}

  private function valid_logged()
  {
    if(!$this->session->userdata('type'))
    {
      return redirect('user/login');
    }
  }

    public function authentication()
    {
    	$data['title']="Welcome admin dashboard";
     

        $config=array(
                        "base_url"      =>base_url("admin/admin/authentication"),
                        "per_page"      => 20	,
                        "total_rows"    => $this->m->pageData(),
                        "uri_segment"   =>4,


                        "full_tag_open" =>"<ul class='pagination pagination-md'>",
                        "full_tag_close"=>"</ul>",
                        "next_tag_open" =>"<li class='page-item'>",
                        "next_tag_close"=>"</a><li>",
                        "prev_tag_open" =>"<li class='page-item'>",
                        "prev_tag_close"=>"<li>",
                        "num_tag_open"  =>"<li class='page-item'>",
                        "num_tag_close" =>"</li>",
                        "cur_tag_open"  =>"<li class='active page-item'><a class='page-link'>",
                        "cur_tag_close"=>"</a></li>",
                        "attributes"=>array('class'=>'page-link'),


        );


        
        $this->pagination->initialize($config);		
        // $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
  		$data['result']=$this->m->displayNote($config['per_page'],$this->uri->segment(4));
  		
        $this->load->view('admin/include/header',$data);
    	$this->load->view('admin/dashboard',$data);
    	$this->load->view('admin/include/footer');
    	


     }

      public function message()
    {
      
       $message = parse_smileys($this->input->post(),base_url().'assets/smileys');
      $this->form_validation->set_rules('bigpin','Fill Username','required');

	 
		if($this->form_validation->run() == true)
		{
			 $data=array(
	            'username'=>$this->session->userdata('type'),		 	
			 	       'msg'=> $message ,
			 );
			
			 
		    $this->m->postNote($data);
		     return redirect('admin/admin/authentication');

		}else
		{
			return redirect('admin/admin/authentication');
			
		}
    } 


    public function detailsuser($userid)
    {
        $data['title'] = "User Details page";
        $data['result']=$this->m->getUserDetails($userid);

      $this->load->view('admin/include/header',$data);
      $this->load->view('admin/userdetails',$data);
      $this->load->view('admin/include/footer');
    }

    public function changeStatus($status,$userid,$username)
    {
      if($status === 'activated')
      {

        $this->m->UserStatusToactive($userid);
        
        $msg['msg']='<b>'.$username." is kicked out from the bigpinboard </b>";
        $this->m->postNote($msg);
        $this->session->set_flashdata('message',"Deactivation is successfully done");
      }
      if($status === 'deactivated')
      {
        $username="";
        $this->m->UserStatusTodeactive($userid);
        $this->session->set_flashdata('message',"activation is successfully done");

      }
      redirect('admin/admin/authentication');


   }

    public function logout()
    {
      $this->session->unset_userdata('type');
      $this->session->sess_destroy();
      redirect('user/login');
      
    }
    

}
?>