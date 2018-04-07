<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_kategori_barang extends CI_Model 
	{

		public function getAllData() 
		{
			$this->db = $this->load->database('default', true);
			$this->db->select('*');
			$this->db->from('TBL_MASTER_KATEGORI_BARANG');
			$query = $this->db->get();
			return $query->result();
		}

		public function getMaxNumber()
		{
			$this->db=$this->load->database('default',true);
			$this->db->select_max('ID_KATEGORI');
			$t=$this->db->get('TBL_MASTER_KATEGORI_BARANG');
			return $t->row();
		}
		function save($data){
			
				 $this->db=$this->load->database('default',true);
				// $this->db->trans_begin();
				 $success = $this->db->insert('TBL_MASTER_KATEGORI_BARANG', $data);
				 //$this->db->trans_commit();
				 //$this->db->trans_complete();
			  if(!$success){
				  $success = false;
				  $errNo   = $this->db->_error_number();
				  $errMess = $this->db->_error_message();
				  array_push($errors, array($errNo, $errMess));
			   }

		return $success;
	}
  }
?>