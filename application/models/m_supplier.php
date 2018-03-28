<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_supplier extends CI_Model 
	{

		public function getAllData() 
		{
			$this->db = $this->load->database('default', true);
			$this->db->select('*');
			$this->db->from('TBL_MASTER_CUSTOMER_SUPLIER');
			$query = $this->db->get();
			return $query->result();
		}

		public function getMaxNumber()
		{
			$this->db=$this->load->database('default',true);
			$this->db->select_max('KODE');
			$t=$this->db->get('TBL_MASTER_CUSTOMER_SUPLIER');
			return $t->row();
		}
	}

?>