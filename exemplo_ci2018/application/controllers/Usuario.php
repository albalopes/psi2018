<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
   
    public function autenticar(){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        if ($usuario == "maria" && $senha=="123"){
            $this->session->set_userdata("usuario", $usuario);
            redirect('/');
        }else{
            $this->session->set_flashdata('msg', "Dados inválidos!");
            redirect('usuario/login');
        }
    }
    
    public function login(){
        $this->load->view('login');
    }
   
    public function logoff(){
        $this->session->unset_userdata('usuario');
        redirect('usuario/login');
    }
    
}
