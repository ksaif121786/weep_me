<?php
/**
 * 
 */
class Dashboard extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();

      if(!$this->session->userdata('username'))
      {
          return redirect('user/login');
      }
         $this->load->model('user/Dashboard_m');
	 }

	public function mainpage()
	{
		

        $data['title'] = "Home";
        $config=array(
                        "base_url"      =>base_url("user/Dashboard/mainpage"),
                        "per_page"      => 20	,
                        "total_rows"    => $this->Dashboard_m->pageData(),
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
  		$result['data']=$this->Dashboard_m->displayNote($config['per_page'],$this->uri->segment(4));
  		
        $this->load->view('user/include/header',$data);
    	$this->load->view('user/Dashboard_v',$result);
    	$this->load->view('user/include/footer');
    	


    }

  


    public function message()
    {
      

   
           $id=$this->session->userdata('id');
           $result= $this->Dashboard_m->userbigpin($id);
           
	  if( $result->pinboard === 'deactivated' )
       {   
          $data['title']="Banned page";
           $this->load->view('user/include/header',$data);
           $this->load->view('user/userbanned',$data);
           $this->load->view('user/include/footer');
           
           
      } else
      {
        $this->form_validation->set_rules('bigpin','Fill Username','required');
        if(!$this->form_validation->run() == true)
        {
              redirect('user/Dashboard/mainpage');

        }else
        {
            $message = parse_smileys($this->input->post('bigpin'),base_url().'assets/smileys');
             $data=array(
                'username'=>$this->session->userdata('username'),           
                'msg'=>$message,
                'user_id'=>$this->session->userdata('id'),
             );
            
             
            $this->Dashboard_m->postNote($data);
             redirect('user/Dashboard/mainpage');
            
        }
      }

      
    
		
    } 


 public function logout()
    {
      $this->session->unset_userdata('username');
      $this->session->sess_destroy();
      redirect('user/login');
      
    }

   
}




?>