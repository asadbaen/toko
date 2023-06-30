<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
	}

	public function index()
	{
		$data['product_data'] = $this->Product_model->getProduct();


		$this->load->view('web/style/header');
		$this->load->view('web/style/navbar');
		$this->load->view('web/index', $data);
		$this->load->view('web/style/footer');
	}

	public function detail($id_product)
	{
		$data['product'] = $this->Product_model->getProductId($id_product);

		$this->load->view('web/style/header');
		$this->load->view('web/style/navbar');
		$this->load->view('web/detail', $data);
		$this->load->view('web/style/footer');
	}
}
