<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Model de estoque do sistema */
Class Estoque_model extends CI_Model{

    /* atributos do model de estoque */
    public $id_lote;
    public $entrada;
    public $quantidade;
    public $atual;
    public $ultima_saida;
    public $valor_compra_unidade;
    public $id_bebida;
    public $id_fornecedor;

    /* Construtor do model de estoque */
    public function __constructor($dados, $bebida, $fornecedor){

        $this->id_lote = isset($dados['id_lote']) ? $dados['id_lote'] : NULL;
        $this->entrada = isset($dados['entrada']) ? $dados['entrada'] : date("Y-m-d");
        $this->quantidade = $dados['quantidade'];
        $this->atual = $dados['atual'];
        $this->ultima_saida = isset($dados['ultima_saida']) ? $dados['ultima_saida'] : NULL;
        $this->valor_compra_unidade = $dados['valor_compra_unidade'];
        $this->id_bebida = $bebida;
        $this->id_fornecedor = $fornecedor;
    }

}


?>