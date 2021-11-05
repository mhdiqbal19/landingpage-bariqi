<?php
    class Model_testimoni extends CI_Model{
        public function tampil_data(){
            return $this->db->get('testimoni');
        }
        public function tambah_testimoni($data,$table){
            $this->db->insert($table,$data);
        }
        public function edit_testimoni($where,$table){
            return $this->db->get_where($table,$where);
        }
        public function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }
        public function hapus_data($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

    }
?>