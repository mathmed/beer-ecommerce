<?php

/* Não permitindo que a URL seja acessada diretamente */
defined('BASEPATH') OR exit('No direct script access allowed');

/* Classe responsável por se conectar ao banco de dados com a tabela Estoque */

Class Estoque_dao extends MY_Dao{

    /* construtor da classe */
    public function __construct(){

        /* carregando os models e DAOs necessários */
		parent::__construct();
        $this->load->model("dash/Estoque_model", "estoque_model");
    }

    /* função pra recuperar o estoque da bebida */
    public function getEstoque($bebida = NULL){

        /* verifica se foi passado algo como parâmetro */
        if($bebida){

            /* iniciando a query */
            $this->db->where("id_bebida", $bebida);
            $this->db->join("fornecedor", "estoque.id_fornecedor = fornecedor.id_fornecedor");

            /* retornando o resultado */
            return $this->db->get("estoque")->result_array();

        }
    }

    /* Função para adicionar bebida ao estoque */
    public function insert($dados = NULL, $bebida = NULL, $fornecedor = NULL){

        /* verifica se foi passado um parâmetro */
        if($dados){

            /* verifica se a quantidade informada é maior que 0 */
            if($dados['quantidade']){


                /* Criando o model e inserindo */
                $this->estoque_model->__constructor($dados, $bebida, $fornecedor);
                $this->db->insert("estoque", $this->estoque_model);

                /* adicinando mensagem de sucesso */    
                $this->session->set_flashdata('gravar_dados_estoque', "<div class = 'alert alert-success'>Estoque atualizado com sucesso!</div>");
            
            }else
                $this->session->set_flashdata('gravar_dados_estoque', "<div class = 'alert alert-danger'>Erro ao atualizar estoque, você informou um valor inválido.</div>");
            
        }else
            $this->session->set_flashdata('gravar_dados_estoque', "<div class = 'alert alert-danger'>Erro ao atualizar estoque, você informou um valor inválido.</div>");

    }

    /* Função para remover bebida do estoque */
    public function delete($lote = NULL, $quantidade = NULL){

        /* verificando se os parâmetros são válidos */
        if($lote != NULL && $quantidade > 0){

            /* verificando a quantidade de bebidas que tem no lote informado */
            $bebidas_lote = $this->db->query("SELECT atual FROM estoque WHERE id_lote = $lote")->result_array()[0]['atual'];

            if($quantidade <= $bebidas_lote){

                $this->db->where("id_lote", $lote);
                $this->db->update("estoque", ["atual" => $bebidas_lote-$quantidade]);

                /* adicinando mensagem de sucesso */    
                $this->session->set_flashdata('gravar_dados_estoque', "<div class = 'alert alert-success'>Estoque atualizado com sucesso!</div>");
            
            }else
                $this->session->set_flashdata('gravar_dados_estoque', "<div class = 'alert alert-danger'>Erro ao atualizar estoque, você informou um valor inválido.</div>");         

        }else
            $this->session->set_flashdata('gravar_dados_estoque', "<div class = 'alert alert-danger'>Erro ao atualizar estoque, você informou um valor inválido.</div>");


    }


}


?>