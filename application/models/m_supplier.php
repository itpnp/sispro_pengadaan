<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_supplier extends CI_Model 
	{
		public function Master_supplier()
		{
			parent::Model();
		}
		
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
		public function save($data){
			try{
				$this->db=$this->load->database('default',true);
				// $this->db->trans_start();
				$success = $this->db->insert('TBL_MASTER_CUSTOMER_SUPLIER', $data);
				// $this->db->trans_commit();
				// $this->db->trans_complete();
				// if ($this->db->trans_status() === FALSE)
				// {
				//     $this->db->trans_rollback();
				// }
				// else
				// {
				//     $this->db->trans_commit();
				}
			}catch(Exception $e){
				$this->db->_error_message();
				$this->db->_error_number();
				$this->db->last_query();
				echo "".$e->getMessage();
				$success = false;
			}
			return $success;
		}
	}

?>