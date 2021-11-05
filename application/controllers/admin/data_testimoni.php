<?php 

        class Data_testimoni extends CI_Controller{
            
            public function index(){
                $data['testimoni'] = $this->model_testimoni->tampil_data()->result();
                $this->load->view('templates_admin/header.php'); 
                $this->load->view('templates_admin/sidebar.php'); 
                $this->load->view('admin/data_testimoni.php',$data); 
                $this->load->view('templates_admin/footer.php'); 
            }
        
            public function tambah_aksi()
            {
                $nama   		= $this->input->post('nama');
                $email   		= $this->input->post('email');
                $dari   		= $this->input->post('dari');
                $pesan   		= $this->input->post('pesan');
        
                $data = array(
                    'nama'		=> $nama,
                    'email'	    => $email,
                    'dari'		=> $dari,
                    'pesan'	    => $pesan,
        
                );
                
                $this->model_testimoni->tambah_testimoni($data, 'testimoni');
                redirect('admin/data_teknologi/index');
            }

            public function tambah_aksi1()
            {
                $nama   		= $this->input->post('nama');
                $email   		= $this->input->post('email');
                $dari   		= $this->input->post('dari');
                $pesan   		= $this->input->post('pesan');
        
                $data = array(
                    'nama'		=> $nama,
                    'email'	    => $email,
                    'dari'		=> $dari,
                    'pesan'	    => $pesan,
        
                );
                
                $this->model_testimoni->tambah_testimoni($data, 'testimoni');
                redirect('dashboard');
            }

            public function hapus($id)
            {
                $where = array('id' => $id);
                $this->model_testimoni->hapus_data($where,'testimoni');
                redirect('admin/data_testimoni/index'); 
            }

            public function edit($id)
            {
                $where = array('id' =>$id);
                $data['testimoni'] = $this->model_testimoni->edit_testimoni($where,'testimoni')->result();



                $this->load->view('templates_admin/header.php'); 
                $this->load->view('templates_admin/sidebar.php'); 
                $this->load->view('admin/edit_testimoni.php',$data); 
                $this->load->view('templates_admin/footer.php'); 
            }

            public function update()
            {
                $id         = $this->input->post('id');
                $nama       = $this->input->post('nama');
                $email      = $this->input->post('email');
                $dari       = $this->input->post('dari');
                $pesan      = $this->input->post('pesan');


                $data = array (
                    'nama '     => $nama,
                    'email'     => $email,
                    'dari '     => $dari,
                    'pesan'     => $pesan,
                );

                $where = array(
                    'id'     => $id
                );

                $this->model_testimoni->update_data($where,$data, 'testimoni');
                redirect('admin/data_testimoni/index');
            }
        }
?>
