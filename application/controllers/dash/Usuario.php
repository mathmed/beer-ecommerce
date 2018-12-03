<?php
/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

/* Controlador do model de usuarios */
class Usuario extends CI_Controller {

    /* construtor da classe */
    public function __construct(){

        /* carregando os models e DAOs necessários */
        parent::__construct();
        $this->load->dao("usuario_dao", "", TRUE);
    }
        
	/* primeira função que é chamada (carregando a tela) */
	public function index(){

        /* verifica se o adm está logado */
        if(!$this->session->has_userdata("adm")) redirect("/");
        
        /* carregando os usuários cadastrados */
        $data['usuarios'] = $this->usuario_dao->getUsers();

        /* dados que serão passados como parâmetro */
        /* enviando como parâmetro a cor da ul */
        $data['cor_ul_usuarios'] = 'ul-marcada';

        /* carregando as views */
        $this->load->view("dash/base.php", $data);
        $this->load->view("dash/usuarios.php");
		
    }
    
    /* função para fazer o cadastro */
    public function cadastrar(){

        /* Carregando o model (nome e apelido) */
        $this->load->model("dash/usuario_model", "usuario");
        
        /* recuperando os dados do form */
        $dados['cpf'] = $this->input->post("cpf");
        $dados['senha'] = $this->input->post("senha");
        $dados['nome'] = $this->input->post("nome");
        $dados['data_nascimento'] = $this->input->post("data_nascimento");
        $dados['apelido'] = $this->input->post("apelido");

        
        /* verifica se os campos estão preenchidos e chama a função de cadast9 */
        if($dados['cpf'] && $dados['senha'] && $dados['nome'] && $dados['data_nascimento'] && $data['apelido']) 
            $this->usuario->cadastrarUsuario($dados);
        
        /* redirecionando */
        redirect("");
        
    }

    /* função para realizar update no cadastro */
    public function atualizar(){
        /* Carregando o model (nome e apelido) */
        $this->load->model("dash/usuario_model", "usuario");

        /* recuperando os dados do form */
        $dados['senha'] = $this->input->post("senha");
        $dados['apelido'] = $this->input->post("apelido");
    }


}
