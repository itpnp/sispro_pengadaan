<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_sales extends CI_Model 
	{

		public function getAllData() 
		{
			$this->db = $this->load->database('default', true);
			$this->db->select('*');
			$this->db->from('TBL_MASTER_SALES');
			$query = $this->db->get();
			return $query->result();
		}
	}

?>