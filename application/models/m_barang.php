<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_barang extends CI_Model 
	{

		public function getAllData() 
		{
			$this->db = $this->load->database('default', true);
			$this->db->select('*');
			$this->db->from('TBL_MASTER_BARANG');
			$query = $this->db->get();
			return $query->result();
		}

		public function getMaxNumber()
		{
			$this->db=$this->load->database('default',true);
			$this->db->select_max('ID_BARANG');
			$t=$this->db->get('TBL_MASTER_BARANG');
			return $t->row();
		}
	}

?>