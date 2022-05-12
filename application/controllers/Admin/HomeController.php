<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => "Dashboard Admin",
            'page' => 'pages/admin/v_dashboard'
        ];
        $this->load->view('layouts/admin/v_main', $data);
    }
}
