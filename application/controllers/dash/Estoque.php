<?php
/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

/* Controlador de Estoque do sistema */
class Estoque extends CI_Controller {

    /* construtor da classe */
    public function __construct(){

        /* carregando os models e DAOs necessários */
		parent::__construct();
        $this->load->dao("estoque_dao", "", TRUE);
        $this->load->dao("bebida_dao", "", TRUE);
        $this->load->dao("fornecedor_dao", "", TRUE);
    }
    
	/* primeira função que é chamada */
	public function index($id = NULL){

        /* verifica se o usuários está logado */
        if(!$this->session->has_userdata("adm")) redirect("/");

        /* fazendo consulta no bd para verificar se existe o registro */
        $query = $this->bebida_dao->getBebidaByID($id);

        /* enviando como parâmetro a cor da ul */
        $dados['cor_ul_gbebidas'] = 'ul-marcada';

        /* verifica se existe */
        if(!$query) redirect("/");

        /* criando array onde será guardado os dados (será passado para view) */
        $dados["bebida"] = $query[0];
        $dados["fornecedores"] = $this->fornecedor_dao->getFornecedores();
        $dados["estoque"] = $this->estoque_dao->getEstoque($id);


        /* guardando url atual */
        $this->session->set_userdata('url', current_url());

        /* carregando as views */
        $this->load->view("dash/base.php", $dados);
        $this->load->view("dash/estoque.php", $dados);
    }

    /* função para gravar os dados vindos do form de adicionar ou editar o estoque */
    public function gravar(){

        /* no caso da requisição for para adicionar algo no estoque */
        if($this->input->post("tipo") == 'estoque-add'){

            /* criando os parâmetros */
            $bebida = $this->input->post("id_bebida");
            $fornecedor = $this->input->post("fornecedor");
            $dados['quantidade'] = $this->input->post("quantidade-add-estoque");
            $dados['atual'] = $this->input->post("quantidade-add-estoque");
            $dados['valor_compra_unidade'] = $this->input->post("valor_compra_unidade");

            /* chamando o DAO */
            $this->estoque_dao->insert($dados, $bebida, $fornecedor);
            
            /* redirecionando */
            redirect($this->session->userdata("url"));

        }

        /* no caso da requisição vir da página de gerenciamento de estoque (remover uma bebida) */
        else if($this->input->post("tipo") == 'estoque-remove'){

            /* chamando o DAO */
            $this->estoque_dao->delete(
                $this->input->post("lote"),
                $this->input->post("quantidade-remove")
            );

            /* redirecionando */
            redirect($this->session->userdata("url"));
        }
    }
    
}

?>