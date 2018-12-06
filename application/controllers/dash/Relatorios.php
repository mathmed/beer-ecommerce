<?php
/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

/* Controlador de relatórios */
class Relatorios extends CI_Controller {

    /* Construtor do controlador de relatórios */
    public function __construct(){

		/* carregando o os DAOS necessários para a págia */
		parent::__construct();

        
	}

	/* primeira função que é chamada (carregando a tela) */
	public function index(){

        /* verifica se o adm está logado */
		if(!$this->session->has_userdata("adm")) redirect("/");

        /* dados que serão passados como parâmetro */
        /* enviando como parâmetro a cor da ul */
        $data['cor_ul_relatorios'] = 'ul-marcada';

        /* Carregando a view da tela de relatórios */
        $this->load->view("dash/base.php", $data);
        $this->load->view("dash/relatorios.php", $data);
		
    }

}
