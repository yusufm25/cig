<?php

    class home extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('home_model');
        }
        

         public function index()
        {
            $data['produk'] = $this->home_model->getAllProduk();
            $this->load->view('home/index', $data);
        }

    }

?>