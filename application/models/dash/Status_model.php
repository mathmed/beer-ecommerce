<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Model de status do sistema */
Class Status_model extends CI_Model{

    /* atributos do model de status */
    public $id_status;
    public $descricao_status;

    /* Construtor do model de status */
    public function __constructor($dados){

        $this->id_status = $dados['id_status'] ? $dados['id_status'] : NULL;
        $this->descricao_status = $dados['descricao_status'];
    }

}


?>