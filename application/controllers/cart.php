<?php

class cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cart_model');
    }

    public function index()
    {   
        $this->load->view('cart/index');
    }

    public function tambah()
    
    {
        $this->cart_model->tambah();

    }
}




?>