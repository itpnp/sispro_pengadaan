<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriBarangController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();

		// if ($this->session->userdata('SESS_AKUN_IS_LOGIN') && $this->session->userdata('SESS_AKUN_USER_PRIV') === 1) {
		// 	redirect(base_url('akun/dashboard'));
		// }
		
		$this->output->set_header('Last-Modified:'.gmdate('D,d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control:no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control:post-check=0,pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');
		$this->load->model('m_kategori_barang');
		
		session_start();

		// $this->load->library('Userauth');
		
	}

	public function index()
	{
		$this->load->view('admin/supplier_home');
	}


	

	public function kategoriHomePage()
	{
		$data = array();
		$getData = $this->m_kategori_barang->getMaxNumber();
		$number = ($getData->ID_KATEGORI)+1;
		$data["lastNumber"]=$number;
		$data["listKategori"] = $this->m_kategori_barang->getAllData();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('kategori_barang/kategori_home', $data);
		$this->load->view('admin/footer');
	}

	public function save()
	{
		$data = array();
		$data["ID_KATEGORI"] = $this->input->post('kodeKategori');
		$data["NAMA_KATEGORI"] = $this->input->post('namaKategori');
		$success = $this->m_kategori_barang->save($data);
		  if($success){
			$data2 = array();
			$getData = $this->m_kategori_barang->getMaxNumber();
		    $number = ($getData->ID_KATEGORI)+1;
			$data2["lastNumber"]=$number;
		    $data2["listKategori"] = $this->m_kategori_barang->getAllData();
			$this->load->view('admin/header');
		    $this->load->view('admin/sidebar');
		    $this->load->view('kategori_barang/kategori_home', $data2);
		    $this->load->view('admin/footer');
	   	}else{
			echo "something wrong";
			exit();
		}
	}
}
