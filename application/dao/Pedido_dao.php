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

}


?>
