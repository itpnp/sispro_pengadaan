<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_login extends CI_Model 
	{

		public function login($data) 
		{
			$this->db = $this->load->database('default', true);
			$username = $data['username'];
			$status =  '1';
			$password = md5($data['password']);
			// echo $data['username']."<br>";
			// echo $data['password']."<br>";
			$pass_bersih=$this->db->escape($data['password']);
			// echo md5($data['password']);
			// exit();
			$this->db->select('*');
			$this->db->from('TBL_USER_WEB');
			$this->db->where('USERNAME', $username);
			$this->db->where('PASSWORD', $password);
			$query = $this->db->get();
			return $query->row();
		}

		public function select_user($data)
		{
			$this->db->select('user.*');
			$this->db->from('user');
			$this->db->where($data);
			$query = $this->db->get();
			return $query->row();
		}

		

		public function get_id($username)
		{
			$this->db->select('id_user');
			$this->db->from('user');
			$this->db->where('username', $username);
			$query = $this->db->get();
			$hasil = $query->num_rows();
			if ($hasil = 1) {
				foreach($query->result() as $hasil ){
					$id_user = $hasil->id_user;
				}
			}else{
				$id_user = false;
			}

				return $id_user;

		}


	}

?>