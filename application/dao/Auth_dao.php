<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/* Model de autenticação do sistema */
Class Auth_dao extends CI_Model{

    /* Função para realizar autenticação no sistema */
    public function auth($dados = NULL){

        /* verifica se os dados foram recebidos */
        if($dados){

            /* Verifica se a autenticação é de um usuário comum ou ADM */
            if(($dados["tipo_auth"] == "user"))
                $retorno = $this->auth_user($dados);

            else
                $retorno = $this->auth_adm($dados);
            
            /* verifica se encontrou algum usuário */
            if($retorno->row()){

                /* inserindo dados na sessão */

                if($dados["tipo_auth"] == "user"){ 
                    $this->session->set_userdata("user", $retorno->result_array()[0]);
                    redirect("public/home");
                }
                if($dados["tipo_auth"] == "adm"){ 
                    $this->session->set_userdata("adm", $retorno->result_array()[0]);
                    redirect("dash/base");
                }

                
                /* redirecionando */
            }

            /* inserir mensagem de erro e retornar falso */
            $this->session->set_flashdata('auth', "<div class = 'alert alert-danger'>Usuário e/ou senha incorretos</div>");
            redirect("/");
        }
    }

    /* função para login específico de usuário comum */
    public function auth_user($dados){

        /* Definindo um limite */
        $this->db->limit(1);

        /* Condição do cpf */
        $this->db->where($dados["cpf"], $dados["cpf"]);
                            
        /* Condição da senha */
        $this->db->where("senha", $dados["senha"]);
        
        /* Requisitando */
        return $this->db->get("usuario");
    }

    /* função para login específico de adm */
    public function auth_adm($dados){

        /* Definindo um limite */
        $this->db->limit(1);

        /* Condição do cpf */
        $this->db->where("cpf_adm", $dados["cpf"]);
            
        /* Condição da senha */
        $this->db->where("senha_adm", $dados["senha"]);

        /* Requisitando */
        return $this->db->get("adm");
    }

    /* função para se deslogar do sistema */
    public function logout(){

        /* destruindo a sessão e redirecionando */
        $this->session->sess_destroy();
        redirect("/");

    }
}


?>
