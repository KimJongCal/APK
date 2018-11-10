<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        if (!$this->session->userdata('logged')) {
            redirect('Auth/');
        }
    }

    public function index(){
        $data = array(
            'title'         => 'Dashboard',
            'css'           => 'dashboard/css',
            'content'       => 'dashboard/content',
            'modal'         => 'dashboard/modal',
            'javascript'    => 'dashboard/javascript',
        );
        $this->load->view('index', $data);
    }

}
