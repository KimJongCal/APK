<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->model('Tbl_users');
    }

	public function index(){
		$this->load->view('login');
	}

	public function Login(){
		$this->load->view('login');	
	}

	public function actionLogin(){
	    $rules[] = array('field' => 'username',	'label' => 'Username', 'rules' => 'required');
	    $rules[] = array('field' => 'password', 'label' => 'Password', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Auth');
		}else{
			$rules = array(
				'select'    => null,
				'where'     => array(
					'username' => $this->input->post('username'),
					'password' => md5(md5($this->input->post('password'))),
				),
				'or_where'  => null,
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$tbSUser = $this->Tbl_users->where($rules);
			if ($tbSUser->num_rows() > 0) {
				$tbSUsers = $tbSUser->row();
				$data = array(
                    'logged' 		=> TRUE, 
                    'id_users'		=> $tbSUsers->id_users,
                    'username'		=> $tbSUsers->username,
                    'nama'			=> $tbSUsers->nama,
                    'level'			=> $tbSUsers->level,
                );
                $this->session->set_userdata($data);
                redirect('Dashboard');	
			}else{
				$this->session->set_flashdata('message','Username atau Password Salah');
				$this->session->set_flashdata('type_message','danger');
				redirect('Auth');
			}
		}
	}
	
	public function Logout(){
        $this->session->sess_destroy();
		$this->session->set_flashdata('message','Berhasil Logout.');
        $this->session->set_flashdata('type_message','success');
        redirect('Auth');
		
	}

}
