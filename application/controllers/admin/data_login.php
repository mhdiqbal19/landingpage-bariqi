<?php 

        class Data_login extends CI_Controller{
            
            public function index(){
                $data['login'] = $this->model_login->tampil_data()->result();
                $this->load->view('templates_admin/header.php'); 
                $this->load->view('templates_admin/sidebar.php'); 
                $this->load->view('admin/data_login.php',$data); 
            //  $this->load->view('templates_admin/footer.php'); 
            }

            public function edit($id)
            {
                $where = array('id' =>$id);
                $data['login'] = $this->model_login->edit_login($where,'login')->result();

                $this->load->view('templates_admin/header.php'); 
                $this->load->view('templates_admin/sidebar.php'); 
                $this->load->view('admin/edit_login.php',$data); 
           //   $this->load->view('templates_admin/footer.php'); 
            }

            public function update()
            {
                $id         = $this->input->post('id');
                $nama       = $this->input->post('nama');
                $username   = $this->input->post('username');
                $password   = $this->input->post('password');
                $role_id    = $this->input->post('role_id');

                $data = array (
                    'nama'        => $nama,
                    'username'    => $username,
                    'password'    => $password,
                    'role_id '    => $role_id,
                );

                $where = array(
                    'id'     => $id
                );

                $this->model_login->update_data($where,$data, 'login');
                redirect('admin/data_login/index');
            }

        }


?>