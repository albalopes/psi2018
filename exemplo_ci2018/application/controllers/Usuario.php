<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
    }
    
    public function autenticar(){
        $login = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        $usuario = $this->Usuario_model->recuperarPorLoginESenha($login, $senha);
        
        if ($usuario){
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
