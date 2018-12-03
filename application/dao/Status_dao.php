<?php

/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

/* Classe responsável por se conectar ao banco de dados com a tabela status */

Class Status_dao extends MY_Dao{

    /* Construtor do DAO de status */
    public function __construct(){

        /* carregando o DAO de status */
        parent::__construct();
        $this->load->model("dash/Status_model", "status_model");
        
    }

    /* função para recuperar todos os status do banco de dados */
    public function getStatus(){
        /* iniciando a query e retornando */
        return $this->db->get("status")->result_array();

    }

    /* função para inserir um novo status no banco de dados */
    public function insert($descricao_status = NULL){

        /* verificando se o parâmetro foi passado corretamente */
        if($descricao_status){

            /* criando o model de status */
            $this->status_model->__constructor(["descricao_status" => $descricao_status]);

            /* chamando a função de inserção */
            $this->db->insert("status", $this->status_model);

            /* adicinando mensagem de sucesso */
            $this->session->set_flashdata('gravar_dados_status', "<div class = 'alert alert-success'>Status adicionado com sucesso!</div>");

        }

        else
            $this->session->set_flashdata('gravar_dados_status', "<div class = 'alert alert-danger'>Erro ao adicionar status, certifique que preencheu os dados corretamente</div>");


        redirect("dash/configuracoes");
    }

    /* função para atualizar um status existente no banco de dados */
    public function update($dados = NULL){

        /* verificando se o parâmetro foi passado corretamente */
        if($dados){

            /* criando o model de status */
            $this->status_model->__constructor($dados);

            $this->db->update("status", $this->status_model, "id_status = ".$this->status_model->id_status);

            $this->session->set_flashdata('gravar_dados_status', "<div class = 'alert alert-success'>Status atualizado com sucesso!</div>");
        }

        else
            $this->session->set_flashdata('gravar_dados_status', "<div class = 'alert alert-danger'>Erro ao atualizar status, certifique que preencheu os dados corretamente</div>");
        
        redirect("/dash/configuracoes");
    }

    /* função para apagar um status existente no banco de dados */
    public function delete($id_status = NULL){

        /* verifica se foi passado um parâmetro */
        if($id_status){

            $this->db->delete("status", "id_status = $id_status");

            $this->session->set_flashdata('gravar_dados_status', "<div class = 'alert alert-success'>Status deletado com sucesso!</div>");
        }

        redirect("/dash/configuracoes");
    }

}


?>
