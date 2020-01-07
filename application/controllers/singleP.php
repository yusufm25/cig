<?php

class singleP extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('singleP_model');
    }

    public function detail($id)
    {   
        $data['produk'] = $this->singleP_model->detailP($id);
        $this->load->view('singleP/index', $data);
    }

    public function index()
    {   
        $this->load->view('singleP/index');
    }

}




?>