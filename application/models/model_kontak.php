<?php
    class Model_kontak extends CI_Model{
        public function tampil_data(){
            return $this->db->get('kontak');
        }
        public function edit_kontak($where,$table){
            return $this->db->get_where($table,$where);
        }
        public function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }

    }
?>