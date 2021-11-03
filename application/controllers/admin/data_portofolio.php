<?php 

        class Data_portofolio extends CI_Controller{
            
            public function index(){
                $data['portofolio'] = $this->model_portofolio->tampil_data()->result();
                $this->load->view('templates_admin/header.php'); 
                $this->load->view('templates_admin/sidebar.php'); 
                $this->load->view('admin/data_portofolio.php',$data); 
                $this->load->view('templates_admin/footer.php'); 
            }

            public function tambah_aksi()
            {
                $judul		= $this->input->post('judul');
                $isi		= $this->input->post('isi');
                $link		= $this->input->post('link');
                $gambar			= $_FILES['gambar']['name'];
                if ($gambar 	= ''){}else{
                    $config['upload_path'] 		= './assets/admin/img/portofolio/.';
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
                    'isi'		=> $isi,
                    'link'  	=> $link,
                    'gambar'	=> $gambar,
        
                );
                
                $this->model_portofolio->tambah_portofolio($data, 'portofolio');
                redirect('admin/data_portofolio/index');
            }

            public function hapus($id)
            {
                $where = array('id' => $id);
                $this->model_portofolio->hapus_data($where,'portofolio');
                redirect('admin/data_portofolio/index'); 
            }

            public function edit($id)
            {
                $where = array('id' =>$id);
                $data['portofolio'] = $this->model_portofolio->edit_portofolio($where,'portofolio')->result();

                $this->load->view('templates_admin/header.php'); 
                $this->load->view('templates_admin/sidebar.php'); 
                $this->load->view('admin/edit_portofolio.php',$data); 
                $this->load->view('templates_admin/footer.php'); 
            }

            public function update()
            {
                $id         = $this->input->post('id');
                $judul      = $this->input->post('judul');
                $isi        = $this->input->post('isi');
                $link       = $this->input->post('link');


                $data = array (
                    'judul'     => $judul,
                    'isi'       => $isi,
                    'link'      => $link,
                );

                $where = array(
                    'id'     => $id
                );

                $this->model_portofolio->update_data($where,$data, 'portofolio');
                redirect('admin/data_portofolio/index');
            }


        }

?>

