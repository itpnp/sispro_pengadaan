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
		$this->load->model('m_area');
		$this->load->model('m_sales');
		$this->load->model('m_collector');
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
		$data["listArea"] = $this->m_area->getAllData();
		$data["listSales"] = $this->m_sales->getAllData();
		$data["listCollector"] = $this->m_collector->getAllData();
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
		$data["NICKNAME"] = $this->input->post('nickname');
		$data["ALAMAT1"] = $this->input->post('alamat1');
		$data["ALAMAT2"] = $this->input->post('alamat2');
		$data["KOTA"] = $this->input->post('kota');
		$data["NEGARA"] = $this->input->post('negara');
		$data["EMAIL_ADDRESS"] = $this->input->post('email');
		$data["TELPON"] = $this->input->post('noTelp');
		$data["FAX"] = $this->input->post('fax');
		$data["NAMA_BANK"] = $this->input->post('namaBank');
		$data["CONTACT_PERSON"] = $this->input->post('contactPerson');
		$data["NOMER_ACCOUNT"] = $this->input->post('nomorAccount');
		$data["ATAS_NAMA"] = $this->input->post('atasNama');
		$data["TOP"] = $this->input->post('top');
		$data["SATUAN_TOP"] = $this->input->post('satuanTop');
		$data["KODE_AREA"] = $this->input->post('kodeArea');
		$data["KODE_SALES"] = $this->input->post('kodeSales');
		$data["KODE_COLLECTOR"] = $this->input->post('kodeCollector');
		$data["VIP"] = $this->input->post('statusVip');
		$data["STATUS_PKP"] = $this->input->post('statusPkp');
		$data["KODE_KEUANGAN"] = $this->input->post('kodeKeuangan');
		// echo $data["KODE"];
		// echo "<br>";
		// echo $data["NAMA"];
		// echo "<br>";
		// echo $data["NICKNAME"];
		// echo "<br>";
		// echo $data["ALAMAT1"];
		// echo "<br>";
		// echo $data["ALAMAT2"];
		// echo "<br>";
		// echo $data["KOTA"];
		// echo "<br>";
		// echo $data["NEGARA"];
		// echo "<br>";
		// echo $data["EMAIL"];
		// echo "<br>";
		// echo $data["TELPON"];
		// echo "<br>";
		// echo $data["FAX"];
		// echo "<br>";
		// echo $data["NAMA_BANK"];
		// echo "<br>";
		// echo $data["CONTACT_PERSON"];
		// echo "<br>";
		// echo $data["NOMER_ACCOUNT"];
		// echo "<br>";
		// echo $data["ATAS_NAMA"];
		// echo "<br>";
		// echo $data["TOP"];
		// echo "<br>";
		// echo $data["SATUAN_TOP"];
		// echo "<br>";
		// echo $data["KODE_AREA"];
		// echo "<br>";
		// echo $data["KODE_SALES"];
		// echo "<br>";
		// echo $data["KODE_COLLECTOR"];
		// echo "<br>";
		// echo $data["VIP"];
		// echo "<br>";
		// echo $data["STATUS_PKP"];
		// exit();
		$success = $this->m_supplier->save($data);
		if($success){
			$list = array();
			$list["listSupplier"] = $this->m_supplier->getAllData();
			$this->load->view('supplier/header');
			$this->load->view('admin/sidebar');
			$this->load->view('supplier/supplier_home', $list);
			$this->load->view('supplier/footer');
		}else{
			echo "something wrong";
			exit();
		}
		
	}
}
