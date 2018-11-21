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

        $data["nome_categoria"] = $categoria;
        $data["dados"] = $this->categoria_dao->getCategorias();
        $data["categoria"] = $this->bebida_dao->getBebidas($data["nome_categoria"]);
        $this->load->view("public/header.php");
        $this->load->view("public/categoria.php", $data);
        $this->load->view("public/footer.php");
    }

}


?>