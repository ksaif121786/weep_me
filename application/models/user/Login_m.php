<?php
//  (!defined('BASEPATH') OR exit('No direct script access allowed');
class Login_m extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}

	public function UserExist($email,$password)
	{
		$q=$this->db->where(array('email'=>$email,'password'=>$password))
		       ->get('user_record');
     
      // $q=$this->db->query("select * from user_record where email='$email' && password='$password'");          
               if($q->num_rows())
               {
               	 return $q->row();;
               }
                 else
               {
               	  return false;
               }


	}
}


?>