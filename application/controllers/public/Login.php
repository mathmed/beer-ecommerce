<?php 

/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

Class Login extends CI_Controller{

    public function __construct(){

        /* carregando os models e DAOs necessários */
		parent::__construct();
        $this->load->dao("categoria_dao", "", TRUE);
        $this->load->dao("auth_dao", "", TRUE);
    }

    public function index(){
        $data["dados"] = $this->categoria_dao->getCategorias();

        $this->load->view('public/header.php');
        $this->load->view("public/login.php", $data);
        $this->load->view('public/footer.php');
    }
    
    public function logar(){
        $dados['senha'] = $this->input->post("senha");
        $dados['cpf'] = $this->input->post("cpf");
        $dados['tipo_auth'] = $this->input->post("tipo_auth");
        if($dados['cpf'] && $dados['senha']) $auth = $this->auth_dao->auth($dados);
    }

    public function deslogar(){
        $this->auth_dao->logout();

    }

}




?>