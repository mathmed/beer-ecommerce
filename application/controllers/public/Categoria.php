<?php 

/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

Class Categoria extends CI_Controller{

    public function __construct(){

        /* carregando os models e DAOs necessários */
		parent::__construct();
        $this->load->dao("categoria_dao", "", TRUE);
        $this->load->dao("bebida_dao", "", TRUE);
    }

    public function index($categoria = NULL){

        $data["id_categoria"] = $categoria;
        $data["dados"] = $this->categoria_dao->getCategorias();
        $data["bebidas"] = $this->bebida_dao->getBebidas($data["id_categoria"]);
        $data['categoria'] = $this->categoria_dao->getCategoriaByID($categoria)[0]['descricao_categoria'];
        $this->load->view("public/header.php");
        $this->load->view("public/categoria.php", $data);
        $this->load->view("public/footer.php");
    }

}


?>