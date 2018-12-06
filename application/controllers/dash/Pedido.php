<?php
/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

/* Controlador do model da página de pedidos */
class Pedido extends CI_Controller {

    /* construtor da classe */
    public function __construct(){

        /* carregando os models e DAOs necessários */
		parent::__construct();
        $this->load->dao("pedido_dao", "", TRUE);
    }
    
	/* primeira função que é chamada */
	public function index(){

        /* verifica se o adm está logado */
        if(!$this->session->has_userdata("adm")) redirect("/");

        /* dados que serão passados como parâmetro */
        /* enviando como parâmetro a cor da ul */
        $data['cor_ul_gpedidos'] = 'ul-marcada';

        $data['pedidos'] = $this->pedido_dao->getPedidos();

        /* carrega a base da página e a tela de dashboard como padrão */
        $this->load->view("dash/base.php", $data);
        $this->load->view("dash/gerenciar_pedidos.php", $data);

    }

    /* função para carregar a página de gerenciamento de um pedido */
    public function editar($id = NULL){

        /* verifica se o usuários está logado e foi passado um id */
		if(!$this->session->has_userdata("adm")) redirect("/");
        
        /* enviando como parâmetro a cor da ul */
        $dados['cor_ul_pedidos'] = 'ul-marcada';

        /* carregando as views */
        $this->load->view("dash/base.php", $dados);
		$this->load->view("dash/editar_pedido.php", $dados);
    }
    
}

?>