<?php

      class singleP_model extends CI_model
      {
        public function getProduk()
        {   
            return $this->db->get_where('tb_produk', ['id' => "1"])->row_array();  
        }
        
        public function detailP($id)
        {
          return $this->db->get_where('tb_produk', ['id' => $id])->row_array();        
        }

      }
        

?>