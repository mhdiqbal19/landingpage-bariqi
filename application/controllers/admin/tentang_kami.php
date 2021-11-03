<?php 

        class Tentang_kami extends CI_Controller{
            
            public function index(){
                $data['tentangkami'] = $this->model_tentangkami->tampil_data()->result();
                $this->load->view('templates_admin/header.php'); 
                $this->load->view('templates_admin/sidebar.php'); 
                $this->load->view('admin/tentang_kami.php',$data); 
            //  $this->load->view('templates_admin/footer.php'); 
            }

            public function edit($id)
            {
                $where = array('id' =>$id);
                $data['tentangkami'] = $this->model_tentangkami->edit_tentangkami($where,'tentangkami')->result();

                $this->load->view('templates_admin/header.php'); 
                $this->load->view('templates_admin/sidebar.php'); 
                $this->load->view('admin/edit_tentangkami.php',$data); 
           //   $this->load->view('templates_admin/footer.php'); 
            }

            public function update()
            {
                $id         = $this->input->post('id');
                $isi1       = $this->input->post('isi1');
                $isi2       = $this->input->post('isi2');

                $data = array (
                    'isi1'     => $isi1,
                    'isi2'     => $isi2,
                );

                $where = array(
                    'id'     => $id
                );

                $this->model_tentangkami->update_data($where,$data, 'tentangkami');
                redirect('admin/tentang_kami/index');
            }
        }

?>