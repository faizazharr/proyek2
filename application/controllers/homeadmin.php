<?php

defined('BASEPATH') or exit('No direct script access allowed');

class homeadmin extends CI_Controller
{
    public function index()
    {
        $this->load->view('/resources/headeradmin');

        $this->load->view('/resources/footeradmin');
    }
}
