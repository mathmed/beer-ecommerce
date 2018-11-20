<?php
/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

/* Controlador da página Alertar */
class Alertar extends CI_Controller {

    public function __construct(){

        /* carregando os DAO's necessários */
        parent::__construct();
    }
	
	/* primeira função que é chamada */
	public function index(){

        /* cor da nav lateral */
        $dados['cor_ul_alertar'] = 'ul-marcada';

        /* Aqui será carregada a view */
        $this->load->view("dash/base.php", $dados);
        $this->load->view("dash/alertar.php");
		
    }

}
?>