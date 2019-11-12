<?php
class Dashboard_m extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}

	public function postNote($msg)
	{
      $this->db->insert('user_msg',$msg);
 
	}

	public function displayNote($limit,$offset)
	{
     
      $this->db->limit($limit,$offset);
      
      $this->db->order_by('id', 'desc');
      $query=$this->db->get('user_msg');
      return $query->result();
     
   }
   public function pageData()
   {
   	// $q= $this->db->query('select * from user_msg ');
     $q=$this->db->get('user_msg');
   	  return $q->num_rows();
   }

   public function userbigpin($id)
   {
       $this->db->where('id',$id);
       $query=$this->db->get('user_record');
       return $query->row();
   }

}




?>