<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {
       
    public function index(){
        if ($this->session->has_userdata('usuario')){
            $this->load->view('template/cabecalho');
            $this->load->view('template/nav');
            $this->load->view('olamundo');
            $this->load->view('template/rodape');
        }else{
            redirect('usuario/login');
        }
    }

    public function listar(){
  
            
         $meusalunos = array("Maria", "José", "Carlos", "Pedro", "Noadia", "Savio", "Saulo");
            
            $dados['titulo'] ="Listagem de alunos";
            sort($meusalunos);
            $dados['meusalunos'] = $meusalunos;
            
            $this->load->view('template/cabecalho');
            $this->load->view('template/nav');
            $this->load->view("listagem", $dados);
            $this->load->view('template/rodape');
            
    }
    
    public function cursos($id){
        $cursos[1] = "Informática para Internet";
        $cursos[2] = "Eletrônica";
        $cursos[3] = "Comércio";
        
        $dados['curso'] = $cursos[$id];
        
        $this->load->view('template/cabecalho');
        $this->load->view('template/nav');
        $this->load->view("cursos", $dados);
        $this->load->view('template/rodape');
    }
    
    public function media($n1, $n2){
        
        $mediaAluno = ($n1 + $n2)/2;
        $dados["media"] = $mediaAluno;
        
        $this->load->view('template/cabecalho');
        $this->load->view('template/nav');
        $this->load->view("boletim", $dados);
        $this->load->view('template/rodape');
    }
    
    public function matricular(){
        $this->load->model('Curso_model', 'cursos');
        $dados["cursos"] = $this->cursos->recuperar();
        $this->load->view('template/cabecalho');
        $this->load->view('template/nav');
        $this->load->view("formmatricula", $dados);
        $this->load->view('template/rodape');
    }
}
