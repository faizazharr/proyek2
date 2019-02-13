<?php

class homepegawai extends CI_Controller
{
    public function index()
    {
        $this->load->view('/resources/headerpegawai');

        $this->load->view('/resources/footerpegawai');
    }
}
