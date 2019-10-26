<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

    public function __construct()
    {
        parent::__construct();    
    }

    public function index(){
        if($this->session->has_userdata('login')){
            redirect(base_url("dashboard"));
        }
        return $this->loadView('login');
    }
    
    public function proses_login(){
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $cekLogin = $this->m_data->getWhere("username", $username);
        $cekLogin = $this->m_data->getWhere("password", $password);
        $cekLogin = $this->m_data->getData("user")->row();

        if($cekLogin){
            $this->session->set_userdata("login", $cekLogin);
            redirect(base_url("dashboard"));
        } else {
            $this->session->set_flashdata("gagal", "Maaf kombinasi username dan password salah!");
            $this->index();
        }
    }

    public function proses_logout(){
        $this->session->sess_destroy();
        redirect(base_url("login"));
    }
    
}
