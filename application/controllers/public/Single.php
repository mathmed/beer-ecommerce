<?php 

/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

Class Single extends CI_Controller{

    public function __construct(){

        /* carregando os models e DAOs necessários */
		parent::__construct();
        $this->load->dao("categoria_dao", "", TRUE);
        $this->load->dao("bebida_dao", "", TRUE);
    }

    public function index($id_bebida = NULL){
        $data["bebida"] = $this->bebida_dao->getBebidaByID($id_bebida)[0];
        $data["dados"] = $this->categoria_dao->getCategorias();
        $this->load->view("public/header.php");
        $this->load->view("public/single.php", $data);
        $this->load->view("public/footer.php");
    }

}


?>