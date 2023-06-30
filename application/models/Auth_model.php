<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function cekLogin($email)
    {
        return $this->db->get_where('tbl_user', ['email' => $email]);
    }

    public function regis()
    {
        date_default_timezone_set('ASIA/JAKARTA');
        $password = $this->input->post('password', true);

        $data = [
            'username' => $this->input->post('username', true),
            'email' => $this->input->post('email', true),
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'level' => '2',
            'created_at' => date('Y-m-d H:i:s')
        ];

        return $this->db->insert('tbl_user', $data);
    }
}
