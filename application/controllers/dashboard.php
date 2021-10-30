<?php 

        class Dashboard extends CI_Controller{

            public function index(){
                $data['teknologi'] = $this->model_teknologi->tampil_data()->result();
                $this->load->view('dashboard',$data); 
            }

        }

?>