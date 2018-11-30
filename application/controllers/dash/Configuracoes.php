<?php
/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

/* Controlador da página de configurações */
class Configuracoes extends CI_Controller {

    /* construtor da classe */
    public function __construct(){

        /* carregando os models e DAOs necessários */
		parent::__construct();
        
    }
    
	/* primeira função que é chamada */
	public function index(){

        /* verifica se o adm está logado */
        if(!$this->session->has_userdata("adm")) redirect("/");

        /* dados que serão passados como parâmetro */
        /* enviando como parâmetro a cor da ul */
        $data['cor_ul_configuracoes'] = 'ul-marcada';

        /* carrega a base da página e a tela de configurações */
        $this->load->view("dash/base.php", $data);
        $this->load->view("dash/configuracoes.php", $data);

    }
   
}

?>