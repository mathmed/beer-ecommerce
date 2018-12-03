<?php
/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

/* Controlador da página de configurações */
class Configuracoes extends CI_Controller {

    /* construtor da classe */
    public function __construct(){

        /* carregando os models e DAOs necessários */
        parent::__construct();
        $this->load->dao("status_dao", "", TRUE);
        
    }
    
	/* primeira função que é chamada */
	public function index(){

        /* verifica se o adm está logado */
        if(!$this->session->has_userdata("adm")) redirect("/");

        /* carregando informações para página */
        $data['status'] = $this->status_dao->getStatus();

        /* dados que serão passados como parâmetro */
        /* enviando como parâmetro a cor da ul */
        $data['cor_ul_configuracoes'] = 'ul-marcada';

        /* carrega a base da página e a tela de configurações */
        $this->load->view("dash/base.php", $data);
        $this->load->view("dash/configuracoes.php", $data);

    }

    /* função para gravar formulários vindos dos statuss */
    public function gravarStatus(){

        /* verifica se o adm está logado */
        if(!$this->session->has_userdata("adm")) redirect("/");

        /* verifica se a requisição é para atualizar ou criar um novo status */

        if($this->input->post("tipo") == "atualizar")

            /* chamando a função no DAO para inserir um novo status */
            $this->status_dao->update([
                "descricao_status" => $this->input->post("descricao_status"),
                "id_status" => $this->input->post("id_status")
            ]);

        else
            /* chamando a função no DAO para inserir um novo status */
            $this->status_dao->insert(
                $this->input->post("descricao_status")
            );

    }

    /* função para apagar um status do banco de dados */
    public function apagarStatus($id_status = NULL){

        /* verifica se o adm está logado */
        if(!$this->session->has_userdata("adm")) redirect("/");

        /* chamando função do DAO para apagar o status */
        $this->status_dao->delete($id_status);
    }
   
}

?>