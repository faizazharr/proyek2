<?php

defined('BASEPATH') or exit('No direct script access allowed');

class account extends CI_Controller
{
    public function index()
    {
        $this->load->view('/resources/headeraccount');
        $this->load->view('/account/login');
        $this->load->view('/resources/footeraccount');
    }

    public function register()
    {
        $this->load->view('/resources/headeraccount');
        $this->load->view('/account/register');
        $this->load->view('/resources/footeraccount');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username == 'admin' && $password == 123) {
            redirect(base_url('homeadmin/'));
        } elseif ($username == 'pegawai' && $password == 123) {
            redirect(base_url('homepegawai/'));
        } else {
            echo "<script>alert('gagal login')</script>";

            return $this->index();
        }
    }
}
