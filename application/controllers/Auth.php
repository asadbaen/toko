<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        logged_in();
        $this->load->view('auth/login');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            $email = $this->input->post('email', true);
            $password = $this->input->post('password', true);

            $query = $this->Auth_model->cekLogin($email);

            if ($query->num_rows() > 0) {
                $row = $query->row();

                if (password_verify($password, $row->password)) {
                    $params = [
                        'userid' => $row->id_user,
                        'email' => $row->email,
                        'password' => $row->password,
                        'level' => $row->level
                    ];

                    $this->session->set_userdata($params);

                    redirect('admin');
                } else {
                    // password tidak sama, redirect
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">
						Password yang anda input salah! </div>');
                    redirect('auth');
                }
            } else {
                // data tidak ditemukan
                $this->session->set_flashdata('message', '<div class="alert alert-danger">
					Email tidak terdaftar! </div>');
                redirect('auth');
            }
        }
    }

    // public function login()
    // {
    //     $data = $this->input->post(null, TRUE);
    //     if (isset($data['login'])) {
    //         $query = $this->Auth_model->cekLogin($data);

    //         if ($query->num_rows() > 0) {

    //             $row = $query->row();
    //             $params = array(
    //                 'userid' => $row->id_user,
    //                 'level' => $row->level
    //             );

    //             $this->session->set_userdata($params);

    //             echo "<script>
    //                 alert('Login success');
    //                 window.location='" . base_url('admin') . "';
    //             </script>";
    //         } else {
    //             echo "<script>
    //                 alert('Login Failed');
    //                 window.location='" . base_url('auth') . "';
    //             </script>";
    //         }
    //     }
    // }

    public function register()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[tbl_user.email]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|matches[password]');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'trim|required|min_length[3]|matches[password]');


        // validation
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                               Register Failed !
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                                </button>
                                            </div>');
            $this->load->view('auth/register');
        } else {
            // validation success
            $this->Auth_model->regis();
            $this->session->set_flashdata('message', '<div class="alert alert-success">
				Registrasi Berhasil ! Silahkan Login ! </div>');

            redirect('auth');
        }
    }

    public function logout()
    {
        $params = array('userid', 'email', 'password', 'level');

        $this->session->unset_userdata($params);
        $this->session->sess_destroy();
        redirect('auth');
    }
}
