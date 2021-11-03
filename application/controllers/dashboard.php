<?php 

        class Dashboard extends CI_Controller{

            public function index(){
                $data['teknologi'] = $this->model_teknologi->tampil_data()->result();
                $data['portofolio'] = $this->model_portofolio->tampil_data()->result();
                $data['tentangkami'] = $this->model_tentangkami->tampil_data()->result();
                $data['kontak'] = $this->model_kontak->tampil_data()->result();
                $this->load->view('dashboard',$data); 
            }

        }

?>                