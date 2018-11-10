<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Arduino extends CI_Controller {

    public function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        if (!$this->session->userdata('logged')) {
            redirect('Auth/');
        }

        $this->load->model('Tbl_arduino');
    }

    public function index(){
        $rules = array(
            'select'    => null,
            'order'     => null,
            'limit'     => null,
            'pagging'   => null,
        );
        $tbArduino = $this->Tbl_arduino->read($rules)->result();

        $data = array(
            'title'         => 'Users',
            'css'           => 'arduino/arduino_data/css',
            'content'       => 'arduino/arduino_data/content',
            'modal'         => 'arduino/arduino_data/modal',
            'javascript'    => 'arduino/arduino_data/javascript',
            'tbArduino'       => $tbArduino,
        );
        $this->load->view('index', $data);
    }

    public function Store(){
        $data = array(
            'field_id'      => $this->input->post('field_id'),
            'label'  => $this->input->post('label'),
            'status'     => $this->input->post('status'),
            'pesan'     => $this->input->post('pesan'),
            'id_users'     => $this->session->userdata('id_users'),
            'create_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s'),
        );

        if($this->Tbl_arduino->create($data)){
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
                'id'       => $id,
            ),
            'or_where'  => null,
            'order'     => null,
            'limit'     => null,
            'pagging'   => null,
        );
        $tbArduino = $this->Tbl_arduino->where($rules)->row();

        $data = array(
            'title'         => 'Edit Users',
            'css'           => 'arduino/arduino_form_edit/css',
            'content'       => 'arduino/arduino_form_edit/content',
            'modal'         => 'arduino/arduino_form_edit/modal',
            'javascript'    => 'arduino/arduino_form_edit/javascript',
            'tbArduino'       => $tbArduino,
        );
        $this->load->view('index', $data);
    }

    public function Update(){
        $rules = array(
            'where' => array(
                'id'       => $this->input->post('id'),
            ),
            'data'  => array(
                'field_id'      => $this->input->post('field_id'),
                'label'  => $this->input->post('label'),
                'status'     => $this->input->post('status'),
                'pesan'     => $this->input->post('pesan'),
                'id_users'     => $this->session->userdata('id_users'),
                'update_at' => date('Y-m-d H:i:s'),
            ),
        );

        if($this->Tbl_arduino->update($rules)){
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

    public function Delete($id){
        $where = array(
            'id' => $id,
        );
        if($this->Tbl_arduino->delete($where)){
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

    public function getArduino($key){
        $encrypt = $key;
        if ($encrypt == "75f5750f6dd6afbec57b0928a0ec306b"){
            $rules = array(
                'select'    => null,
                'order'     => null,
                'limit'     => null,
                'pagging'   => null,
            );
            $arduino = $this->Tbl_arduino->read($rules);
            if ($arduino->num_rows() > 0){
                foreach ($arduino->result() as $value){
                    $getData[] = array(
                        'id'                    => $value->id,
                        'field_id'                    => $value->field_id,
                        'label'                    => $value->label,
                        'status'                    => $value->status,
                        'pesan'                    => $value->pesan,
                        'id_users'                    => $value->id_users,
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
