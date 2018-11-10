<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {

    public function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        if (!$this->session->userdata('logged')) {
            redirect('Auth/');
        }

        $this->load->model('Tbl_users');
    }

    public function index(){
        $rules = array(
            'select'    => null,
            'order'     => null,
            'limit'     => null,
            'pagging'   => null,
        );
        $tbUsers = $this->Tbl_users->read($rules)->result();

        $data = array(
            'title'         => 'Users',
            'css'           => 'users/user_data/css',
            'content'       => 'users/user_data/content',
            'modal'         => 'users/user_data/modal',
            'javascript'    => 'users/user_data/javascript',
            'tbUsers'       => $tbUsers,
        );
        $this->load->view('index', $data);
    }

    public function Store(){
        $data = array(
            'nama'      => $this->input->post('nama'),
            'username'  => $this->input->post('username'),
            'password'  => md5(md5($this->input->post('password'))),
            'level'     => $this->input->post('level'),
            'create_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s'),
        );

        if($this->Tbl_users->create($data)){
            $this->session->set_flashdata('message','Berhasil disimpan.');
            $this->session->set_flashdata('type_message','success');
            redirect('Users');
        }
        else{
            $this->session->set_flashdata('message','Gagal disimpan.');
            $this->session->set_flashdata('type_message','danger');
            redirect('Users');
        }
    }

    public function Edit($id){
        $rules = array(
            'select'    => null,
            'where'     => array(
                'id_users'       => $id,
            ),
            'or_where'  => null,
            'order'     => null,
            'limit'     => null,
            'pagging'   => null,
        );
        $tbUsers = $this->Tbl_users->where($rules)->row();

        $data = array(
            'title'         => 'Edit Users',
            'css'           => 'users/user_form_edit/css',
            'content'       => 'users/user_form_edit/content',
            'modal'         => 'users/user_form_edit/modal',
            'javascript'    => 'users/user_form_edit/javascript',
            'tbUsers'       => $tbUsers,
        );
        $this->load->view('index', $data);
    }

    public function Update(){
        if(empty($this->input->post('password'))){
            $rules = array(
                'where' => array(
                    'id_users'       => $this->input->post('id_users'),
                ),
                'data'  => array(
                    'nama'      => $this->input->post('nama'),
                    'username'  => $this->input->post('username'),
                    'level'     => $this->input->post('level'),
                    'update_at' => date('Y-m-d H:i:s'),
                ),
            );

            if($this->Tbl_users->update($rules)){
                $this->session->set_flashdata('message','Berhasil diubah.');
                $this->session->set_flashdata('type_message','success');
                redirect('Users');
            }
            else{
                $this->session->set_flashdata('message','Gagal diubah.');
                $this->session->set_flashdata('type_message','danger');
                redirect('Users');
            }
        }
        else{
            $rules = array(
                'where' => array(
                    'id_users'       => $this->input->post('id_users'),
                ),
                'data'  => array(
                    'nama'      => $this->input->post('nama'),
                    'username'  => $this->input->post('username'),
                    'password'  => md5(md5($this->input->post('password'))),
                    'level'     => $this->input->post('level'),
                    'update_at' => date('Y-m-d H:i:s'),
                ),
            );

            if($this->Tbl_users->update($rules)){
                $this->session->set_flashdata('message','Data dan Password Berhasil diubah.');
                $this->session->set_flashdata('type_message','success');
                redirect('Users');
            }
            else{
                $this->session->set_flashdata('message','Data dan Password Gagal diubah.');
                $this->session->set_flashdata('type_message','danger');
                redirect('Users');
            }
        }
    }

    public function Delete($id){
        $where = array(
            'id_users' => $id,
        );
        if($this->Tbl_users->delete($where)){
            $this->session->set_flashdata('message','Berhasil dihapus.');
            $this->session->set_flashdata('type_message','success');
            redirect('Users');
        }
        else{
            $this->session->set_flashdata('message','Gagal dihapus.');
            $this->session->set_flashdata('type_message','danger');
            redirect('Users');
        }
    }

    public function getUsers($key){
        $encrypt = $key;
        if ($encrypt == "9bc65c2abec141778ffaa729489f3e87"){
            $rules = array(
                'select'    => null,
                'order'     => null,
                'limit'     => null,
                'pagging'   => null,
            );
            $users = $this->Tbl_users->read($rules);
            if ($users->num_rows() > 0){
                foreach ($users->result() as $value){
                    $getData[] = array(
                        'id_users'                    => $value->id_users,
                        'nama'                    => $value->nama,
                        'username'                    => $value->username,
                        'password'                    => $value->password,
                        'level'                    => $value->level,
                        'create_at'                  => $value->create_at,
                        'update_at'                  => $value->update_at,
                    );
                }
                $data = array(
                    'status'    => TRUE,
                    'message'   => NULL,
                    'data'      => $getData,
                );
            }else{
                $data = array(
                    'status'    => TRUE,
                    'message'   => 'Data tidak ada.',
                    'data'      => NULL,
                );
            }
        }else{
            $data = array(
                'status'    => TRUE,
                'message'   => 'Keys salah.',
                'data'      => NULL,
            );
        }
        echo json_encode($data);
    }
}
