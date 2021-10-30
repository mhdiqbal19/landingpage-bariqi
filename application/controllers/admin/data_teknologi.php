<?php 

        class Data_teknologi extends CI_Controller{
            
            public function index(){
                $data['teknologi'] = $this->model_teknologi->tampil_data()->result();
                $this->load->view('templates_admin/header.php'); 
                $this->load->view('templates_admin/sidebar.php'); 
                $this->load->view('admin/data_teknologi.php',$data); 
                $this->load->view('templates_admin/footer.php'); 
            }

            public function tambah_aksi()
            {
                $judul		= $this->input->post('judul');
                $gambar			= $_FILES['gambar']['name'];
                if ($gambar 	= ''){}else{
                    $config['upload_path'] 		= './assets/home/images/tekhnologi/.';
                    $config['allowed_types'] 	= 'png|jpeg|jpg|gif';
        
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('gambar')){
                        echo "Gambar Gagal di Upload!";
                    }else {
                        $gambar=$this->upload->data('file_name');
                    }
                }
        
                $data = array(
                    'judul'		=> $judul,
                    'gambar'	=> $gambar,
        
                );
                
                $this->model_teknologi->tambah_teknologi($data, 'teknologi');
                redirect('admin/data_teknologi/index');
            }
            
            public function edit($id)
            {
                $where = array('id' =>$id);
                $data['teknologi'] = $this->model_teknologi->edit_teknologi($where,'teknologi')->result();



                $this->load->view('templates_admin/header.php'); 
                $this->load->view('templates_admin/sidebar.php'); 
                $this->load->view('admin/edit_teknologi.php',$data); 
                $this->load->view('templates_admin/footer.php'); 
            }

            public function update()
            {
                $id         = $this->input->post('id');
                $judul      = $this->input->post('judul');


                $data = array (
                    'judul'     => $judul,
                );

                $where = array(
                    'id'     => $id
                );

                $this->model_teknologi->update_data($where,$data, 'teknologi');
                redirect('admin/data_teknologi/index');
            }

            public function hapus($id)
            {
                $where = array('id' => $id);
                $this->model_teknologi->hapus_data($where,'teknologi');
                redirect('admin/data_teknologi/index'); 
            }

        }

?>

