<?php   

class Ngoding extends CI_Controller {
    
    function index(){
        $this->load->library('Testing');
        $this->testing->nama_saya();
            echo "<br/>";
            $this->testing->nama_anda(" Johan");
    } 
}