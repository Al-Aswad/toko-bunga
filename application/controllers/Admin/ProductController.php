<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductController extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => "Dashboard Admin",
            'page' => 'pages/admin/v_dashboard'
        ];

        $this->load->view('layouts/admin/v_main', $data);
    }

    public function create()
    {
        $data = [
            'title' => "Tambah Product",
            'page' => 'pages/admin/v_dashboard'
        ];

        $this->load->view('layouts/admin/v_main', $data);
    }
}
