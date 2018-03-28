<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SupplierController extends CI_Controller {

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
		$this->load->model('m_supplier');
		session_start();

		// $this->load->library('Userauth');
		
	}

	public function index()
	{
		$this->load->view('admin/supplier_home');
	}


	public function supplierAddPage()
	{
		$data = array();
		$getData = $this->m_supplier->getMaxNumber();
		$number = ($getData->KODE)+1;
		if(strlen($number)==4){
			$number = "0000".$number;
		}
		$data["lastNumber"]=$number;
		$this->load->view('supplier/header');
		$this->load->view('admin/sidebar');
		$this->load->view('supplier/supplier_add',$data);
		$this->load->view('supplier/footer');
	}

	public function supplierHomePage()
	{
		$data = array();
		$data["listSupplier"] = $this->m_supplier->getAllData();
		$this->load->view('supplier/header');
		$this->load->view('admin/sidebar');
		$this->load->view('supplier/supplier_home', $data);
		$this->load->view('supplier/footer');
	}

	public function save()
	{
		$data = array();
		$data["KODE"] = $this->input->post('kodeSupplier');
		$data["NAMA"] = $this->input->post('namaSupplier');
		$data["ALAMAT1"] = $this->input->post('alamat1');
		$data["listSupplier"] = $this->m_supplier->getAllData();
		$this->load->view('supplier/header');
		$this->load->view('admin/sidebar');
		$this->load->view('supplier/supplier_home', $data);
		$this->load->view('supplier/footer');
	}
}
