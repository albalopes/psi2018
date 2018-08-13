<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {
   
    public function salvar(){
       $this->load->model('Curso_model');
       $this->Curso_model->nome = $_POST["nome"];
       $this->Curso_model->descricao = $_POST["descricao"];
       $this->Curso_model->inserir();
       redirect('curso/listar');
   }
   
   public function cadastrar(){
       
       $this->load->view('template/cabecalho');
       $this->load->view('template/nav');
       $this->load->view('formcurso');
       $this->load->view('template/rodape');
   }
   
   public function listar(){
       $this->load->model('Curso_model');
       $dados["cursos"] = $this->Curso_model->recuperar();
       $this->load->view('template/cabecalho');
       $this->load->view('template/nav');
       $this->load->view('listarcursos', $dados);
       $this->load->view('template/rodape');
   }
   
   public function detalhes($id){
       $this->load->model('Curso_model', 'cursos');
       $dados["curso"] = $this->cursos->recuperarUm($id);
       $this->load->view('template/cabecalho');
       $this->load->view('template/nav');
       $this->load->view('detalhescurso', $dados);
       $this->load->view('template/rodape');
   }
   
   
   public function excluir($id){
       $this->load->model('Curso_model');
       $this->Curso_model->remover($id);
       redirect('curso/listar');
   }
   
   public function editar($id){
       $this->load->model('Curso_model');
       $dados["c"] = $this->Curso_model->recuperarUm($id);
       $this->load->view('template/cabecalho');
       $this->load->view('template/nav');
       $this->load->view('editarcurso', $dados);
       $this->load->view('template/rodape');
   }
   
   public function atualizar($id){
        $this->load->model('Curso_model');
        $dados = array("nome"=> $_POST["nome"], "descricao"=>$_POST["descricao"]);
         $this->Curso_model->id = $id;
         $this->Curso_model->update($dados);
         redirect('curso/listar');
   }
}
