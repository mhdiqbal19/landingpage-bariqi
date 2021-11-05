<?php
    class Model_login extends CI_Model{
        public function tampil_data(){
            return $this->db->get('login');
        }
        public function edit_login($where,$table){
            return $this->db->get_where($table,$where);
        }
        public function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }

    }
?>