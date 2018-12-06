<?php

/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

/* Classe responsável por se conectar ao banco de dados com a tabela pedido */

Class Pedido_dao extends MY_Dao{

    /* Construtor do DAO de pedidos */
    public function __construct(){

        /* carregando o Model de pedido */
        parent::__construct();
        $this->load->model("dash/Pedido_model", "pedido_model");
        
    }

    /* função para recuperar os pedidos do banco de dados */
    public function getPedidos(){

        /* iniciando a query */
        $this->db->join("status", "pedido.id_status = status.id_status"); 
        
        /* guardando o resultado dos pedidos */
        $pedidos = $this->db->get("pedido")->result_array();

        /* adicionando bebidas dentro do pedido */
        foreach($pedidos as &$pedido){
            $this->db->select("preco_bebida, qtd, nome_bebida");
            $this->db->join("pedido_has_bebida", "bebida.id_bebida = pedido_has_bebida.id_bebida");
            $pedido['bebidas'] = $this->db->get_where("bebida", ["id_pedido" => $pedido['id_pedido']])->result_array();

        }

        /* calculando o valor total */
        foreach($pedidos as &$pedido){

            $pedido['valor_total'] = 0;

            foreach($pedido['bebidas'] as $bebida){
                
                $pedido['valor_total'] += $bebida['preco_bebida'] * $bebida['qtd'];
                
            }

        }
        
        /* retornando o array de resultado */
        return $pedidos;
    }

}


?>
