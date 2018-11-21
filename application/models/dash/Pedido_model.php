<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Model de pedidos do sistema */
Class Pedido_model extends CI_Model{

    /* atributos do model de pedido */
    public $id_pedido;
    public $valor_total;
    public $data_att_status;
    public $data_pedido;
    public $id_pagamento;
    public $id_usuario;
    public $id_endereco;
    public $id_status;

    /* Construtor do model de pedidos */
    public function __constructor($dados, $pagamento, $usuario, $endereco, $status){

        $this->id_pedido = $dados['id_pedido'];
        $this->valor_total = $dados['valor_total'];
        $this->data_att_status = $dados['data_att_status'];
        $this->data_pedido = $dados['data_pedido'];
        $this->$id_pagamento = $pagamento;
        $this->$id_usuario = $usuario;
        $this->$id_endereco = $endereco;
        $this->$id_status = $status;

    }

}


?>