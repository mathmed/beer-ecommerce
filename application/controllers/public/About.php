<?php 

/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

Class About extends CI_Controller{

    

    public function __construct(){

        /* carregando os models e DAOs necessários */
		parent::__construct();
        $this->load->dao("categoria_dao", "", TRUE);
    }

    public function index(){
        $data["dados"] = $this->categoria_dao->getCategorias();
        $this->load->view("public/header.php");
        $this->load->view("public/about.php", $data);
        $this->load->view("public/footer.php");
    }

}


?>