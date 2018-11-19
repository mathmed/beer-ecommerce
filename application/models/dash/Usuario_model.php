<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Model de usuários do sistema */
Class Usuario_model extends CI_Model{

    /* atributos do model de usuário */
    public $id_usuario;
    public $cpf;
    public $nome;
    public $email;
    public $senha;
    public $data_nascimento;
    public $apelido;
    public $data_cadastro;
    public $id_endereco;
    public $id_contato;

    /* Construtor do model de usuário */
    public function __constructor($dados, $endereco, $contato){

        $this->id_usuario = $dados['id_usuario'];
        $this->cpf = $dados['cpf'];
        $this->nome = $dados['nome'];
        $this->email = $dados['email'];
        $this->senha = $dados['senha'];
        $this->data_nascimento = $dados['data_nascimento'];
        $this->apelido = $dados['apelido'];
        $this->data_cadastro = $dados['data_cadastro'];
        $this->id_endereco = $endereco;
        $this->id_contato = $contato;
    }

}


?>