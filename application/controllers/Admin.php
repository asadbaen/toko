<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        logged_fail();
    }

    public function index()
    {
        $this->load->view('admin/style/header');
        $this->load->view('admin/style/navbar');
        $this->load->view('admin/style/sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/style/footer');
    }
}
