<?php

/**
 * Created by PhpStorm.
 * User: adhibarfan
 * Date: 04/11/16
 * Time: 22:29
 */
class Halaman extends CI_Controller
{
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function view($halaman = 'tes')
    {
        $this->load->view('template/header');
        $this->load->view('pages/'.$halaman);
        $this->load->view('template/footer');
    }
}