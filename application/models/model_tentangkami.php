<?php
    class Model_tentangkami extends CI_Model{
        public function tampil_data(){
            return $this->db->get('tentangkami');
        }
        public function edit_tentangkami($where,$table){
            return $this->db->get_where($table,$where);
        }
        public function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }

    }
?>