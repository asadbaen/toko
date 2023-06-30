<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Category_model');
    }

    public function index()
    {

        $data['list_product'] = $this->Product_model->getProduct();

        $this->load->view('admin/style/header');
        $this->load->view('admin/style/navbar');
        $this->load->view('admin/style/sidebar');
        $this->load->view('admin/product/index', $data);
        $this->load->view('admin/style/footer');
    }

    public function created()
    {
        $data = [
            'list_category' => $this->Category_model->getCategories(),
            'kodebrg' => $this->Product_model->kdbrg(),
        ];


        $this->load->view('admin/style/header');
        $this->load->view('admin/style/navbar');
        $this->load->view('admin/style/sidebar');
        $this->load->view('admin/product/product_add', $data);
        $this->load->view('admin/style/footer');
    }

    public function saveCreated()
    {

        $data = [
            'kode_brg' => $this->input->post('kode_brg'),
            'product_name' => $this->input->post('product_name'),
            'short_description' => $this->input->post('short_description'),
            'long_description' => htmlspecialchars($this->input->post('long_description')),
            'category_product' => $this->input->post('category_product'),
            'price' => $this->input->post('price'),
            'stock' => $this->input->post('stock'),
            'product_img' => "gambar.jpg",
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // var_dump($data);
        // die();

        $this->Product_model->createProduct($data);

        redirect('product');
    }

    public function deletedProduct($id_product)
    {
        $result = $this->Product_model->destroy($id_product);

        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted successfully!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to delete data!</div>');
        }
        redirect('product');
    }
}
