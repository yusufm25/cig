<?php

      class home_model extends CI_model
      {
        public function getAllProduk()
        {   
            return $this->db->get('tb_produk')->result_array();
        }
        
  
      }
        

?>