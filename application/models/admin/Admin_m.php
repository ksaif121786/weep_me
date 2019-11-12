<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Admin_m extends CI_Model
{

   public function AdminExist($email,$password)
    {
        $q=$this->db->where(array('admin'=>$email,'password'=>$password))
               ->get('admin_record');
              
               if($q->num_rows())
               {
                 return $q->row();
               }
                 else
               {
                  return false;
               }


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

   public function getUserDetails($userid)
   {
    $this->db->where('id',$userid);
    $query=$this->db->get('user_record');
    return $query->row();


   }

   public function UserStatusToactive($userid)
   {
    $status = array('pinboard'=>'deactivated','bantime'=>date('H:i:s'));
    $this->db->where('id',$userid);
    $this->db->update('user_record',$status);
    
   
   }

   public function UserStatusTodeactive($userid)
   {
    $status = array('pinboard'=>'activated');
    $this->db->where('id',$userid);
    $this->db->update('user_record',$status);
    
   
   }

   
}

