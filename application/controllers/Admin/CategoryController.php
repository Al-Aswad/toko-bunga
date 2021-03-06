<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryController extends CI_Controller
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
            'page' => 'pages/admin/category/v_create'
        ];

        $this->load->view('layouts/admin/v_main', $data);
    }

    public function store()
    {
        $data = $this->input->post();
        $this->universalModel->insert('categories', $data);

        $this->session->set_tempdata('success', 'Berhasil Menambahkan Karyawan ', 3);
        redirect('admin/category');
    }
}
