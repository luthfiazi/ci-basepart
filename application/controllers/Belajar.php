<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('html');
        $this->load->model('M_data');
    }

    public function index(){
        echo "Hello world";
    }

    public function halo(){
            $data = array(
                'nama_lengkap' => "Luthfi azizi",
                'pekerjaan'=> "Programmer"
            );
        $this->load->view('view_belajar', $data);
    }

    public function user(){
        $data['user'] = $this->M_data->ambil_data()->result();
        $this->load->view('v_user.php', $data);
    }

}