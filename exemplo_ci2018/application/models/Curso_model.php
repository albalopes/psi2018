<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Curso_model
 *
 * @author 2813232
 */
class Curso_model extends CI_Model{
    public $id;
    public $nome;
    public $descricao;
    
    public function __construct(){
        parent::__construct();
    }
    
    public function inserir(){
        $dados = array("nome"=>$this->nome, "descricao"=>$this->descricao);
        $this->db->insert("curso", $dados);
    }
    
    public function recuperar(){
        $this->db->order_by('nome', 'asc');
        $query = $this->db->get('curso');
        return $query->result();
    }
        
    public function recuperarUm($id){
        $this->db->where('id', $id);
        $query = $this->db->get('curso');
        return $query->row();
    }
    
    public function remover($id){
       $this->db->where('id', $id);
       $this->db->delete('curso');
    }
    
    public function update($dados){
        $this->db->set($dados);
        $this->db->where('id', $this->id);
        $this->db->update('curso');
    }
    /*
    public function inserir($nome, $descricao){
        $dados = array("nome"=>$nome, "descricao"=>$descricao);
        $this->db->insert("curso", $dados);
    }
     */
}   
