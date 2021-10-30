<?php 

        class Dashboard_admin extends CI_Controller{

            public function index(){    
                $this->load->view('templates_admin/header.php'); 
                $this->load->view('templates_admin/sidebar.php'); 
                $this->load->view('admin/dashboard_admin.php'); 
                $this->load->view('templates_admin/footer.php'); 
            }

        }

?>

