<?php

class Insert_m extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}

	public function insertdb($tb_name,$data)
	{
      $this->db->insert($tb_name,$data);
	}
}




?>