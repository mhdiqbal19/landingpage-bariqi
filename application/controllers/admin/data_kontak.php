<?php 

        class Data_kontak extends CI_Controller{
            
            public function index(){
                $data['kontak'] = $this->model_kontak->tampil_data()->result();
                $this->load->view('templates_admin/header.php'); 
                $this->load->view('templates_admin/sidebar.php'); 
                $this->load->view('admin/data_kontak.php',$data); 
            //  $this->load->view('templates_admin/footer.php'); 
            }

            public function edit($id)
            {
                $where = array('id' =>$id);
                $data['kontak'] = $this->model_kontak->edit_kontak($where,'kontak')->result();

                $this->load->view('templates_admin/header.php'); 
                $this->load->view('templates_admin/sidebar.php'); 
                $this->load->view('admin/edit_kontak.php',$data); 
           //   $this->load->view('templates_admin/footer.php'); 
            }

            public function update()
            {
                $id         = $this->input->post('id');
                $telepon    = $this->input->post('telepon');
                $email      = $this->input->post('email');
                $alamat     = $this->input->post('alamat');

                $data = array (
                    'telepon'     => $telepon,
                    'email'       => $email,
                    'alamat'      => $alamat,
                );

                $where = array(
                    'id'     => $id
                );

                $this->model_kontak->update_data($where,$data, 'kontak');
                redirect('admin/data_kontak/index');
            }
        }

?>