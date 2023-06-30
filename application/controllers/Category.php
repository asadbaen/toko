<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Category_model');
    }
    public function index()
    {

        $data['list_kategori'] = $this->Category_model->getCategories();


        $this->load->view('admin/style/header');
        $this->load->view('admin/style/navbar');
        $this->load->view('admin/style/sidebar');
        $this->load->view('admin/category/index', $data);
        $this->load->view('admin/style/footer');
    }

    public function created()
    {
        $data['title'] = "tambah";

        $this->load->view('admin/style/header');
        $this->load->view('admin/style/navbar');
        $this->load->view('admin/style/sidebar');
        $this->load->view('admin/category/category_add', $data);
        $this->load->view('admin/style/footer');
    }

    public function save_created()
    {


        $this->form_validation->set_rules('category_title', 'Nama Kategori', 'required');


        if ($this->form_validation->run() == FALSE) {
            redirect('Category');
        } else {
            $data = [
                'category_title' => $this->input->post('category_title'),
                'category_description' => $this->input->post('category_description'),
                'publish' => $this->input->post('publish'),
            ];

            $this->Category_model->categoryCreated($data);

            redirect('category');
        }
    }

    public function editCategory($id_category)
    {
        $data['title'] = "edit data";
        $data['category'] = $this->Category_model->categoryId($id_category);

        $this->load->view('admin/style/header');
        $this->load->view('admin/style/navbar');
        $this->load->view('admin/style/sidebar');
        $this->load->view('admin/category/category_edit', $data);
        $this->load->view('admin/style/footer');
    }

    public function save_updated()
    {
        $id_category = $this->input->post('id_category');
        $data = [
            'category_title' => $this->input->post('category_title'),
            'category_description' => $this->input->post('category_description'),
            'publish' => $this->input->post('publish'),
        ];

        $result = $this->Category_model->updateCategory($id_category, $data);

        if ($result) {
            redirect('kategori');
        }

        redirect('kategori');
    }

    public function delete_category($id_category)
    {
        $result = $this->Category_model->destroy($id_category);

        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted successfully!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to delete data!</div>');
        }
        redirect('kategori');
    }
}
