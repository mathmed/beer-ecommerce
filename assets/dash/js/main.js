
/* Arquivo responsável por controlar os components front-end utilizando jQuery */
$(document).ready(function(){

    /* iniciando o dropdown */
    $(".dropdown").dropdown();

    /* efeitos do menu retrátil */
    $("#icone").click(function(){
        if($("#conteudo-nav").hasClass("hidden")){
            $("#side-bar").removeClass("col-md-1");
            $("#side-bar").addClass("col-md-4");
            $("#conteudo-nav").removeClass("hidden");
            $("#conteudo").removeClass("col-md-11");
            $("#conteudo").addClass("col-md-8");
            $("#icone").addClass("rotate");
            $("#logo").removeClass("hidden");
        }else{
            $("#side-bar").removeClass("col-md-4");
            $("#side-bar").addClass("col-md-1");
            $("#conteudo-nav").addClass("hidden");
            $("#conteudo").removeClass("col-md-8");
            $("#conteudo").addClass("col-md-11");
            $("#icone").removeClass("rotate");
            $("#logo").addClass("hidden");
        }
    })

    /* funções de controle do collapse */
    $("#btn-collapse-remove").click(function(){

        if($("#collapse-remove").hasClass("in")){
            $("#collapse-remove").collapse("hide")
        }
        
        else{
            $("#collapse-add").collapse("hide");
            $("#collapse-remove").collapse("show")
        }
    })

    /* funções de controle do collapse */
    $("#btn-collapse-add").click(function(){

        if($("#collapse-add").hasClass("in")){
            $("#collapse-add").collapse("hide")
        }
        
        else{
            $("#collapse-remove").collapse("hide");
            $("#collapse-add").collapse("show")
        }
    })
    
    /* Função quick search da página de categorias */
    $('input#filtro-categoria').quicksearch('table#tabela-categorias tbody tr');

    /* Função do quick search da página de marcas */
    $('input#filtro-marca').quicksearch('table#tabela-marcas tbody tr');

    /* Função do quick search da página de fornecedores */
    $('input#filtro-fornecedor').quicksearch('table#tabela-fornecedores tbody tr');

    /* Funções do quick search da página de bebidas */
    $('input#filtro-nome').quicksearch('table#tabela-bebidas tbody tr', {
        selector: ".td-nome"
    })

    /* Função para abrir o modal da página de categorias dinâmicamente */
    $(".editar-categoria").click(function(){

        /* pegando id e nome da categoria */
        var id = $(this).attr("id-categoria");
        var nome = $(this).attr("nome-categoria").replace(/_/g, " ");
        var nome_id = $(this).attr("nome-categoria");

        var modal = "<div id = "+nome_id+id+" class= 'modal fade' tabindex='-1' role='dialog' data-backdrop = 'static'>"+
                        "<div class='modal-dialog' role='document'>"+
                            "<div class='modal-content'>"+
                                "<div class='modal-header'>"+
                                    "<h5 class='modal-title'>Editar categoria "+nome+"</h5>"+
                                    "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>"+
                                    "<span aria-hidden='true'>&times;</span>"+
                                    "</button>"+
                                "</div>"+
                                "<form method = 'POST' action = '/beer-ecommerce/dash/categoria/atualizar'>"+
                                    "<div class='modal-body'>"+
                                        "<label>Descrição da categoria</label>"+
                                        "<input name = 'descricao_categoria' value = '"+nome+"' class = 'form-control'>"+
                                        "<input type = 'hidden' name = 'id_categoria' value = '"+id+"'>"+
                                    "</div>"+
                                    "<div class='modal-footer'>"+
                                    
                                        "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar janela</button>"+
                                        "<a class='btn btn-danger' href = '/beer-ecommerce/dash/categoria/apagar/"+id+"'"+">Apagar categoria</a>"+
                                        "<button type='submit' class='btn btn-primary'>Atualizar</button>"
                                    "</div>"+
                                "</form>"+
                            "</div>"+
                        "</div>"+
                    "</div>"

        /* adicionando modal ao body e abrindo-o */ 
        $("body").append(modal);
        $("#"+nome_id+id).modal("show");

    })

    /* Função para abrir o modal da página de marcas dinâmicamente */
    $(".editar-marca").click(function(){
        
        /* pegando id e nome da marca */
        var id = $(this).attr("id-marca");
        var nome = $(this).attr("nome-marca").replace(/_/g, " ");
        var nome_id = $(this).attr("nome-marca");
        

        var modal = "<div id = "+nome_id+id+" class= 'modal fade' tabindex='-1' role='dialog' data-backdrop = 'static'>"+
                        "<div class='modal-dialog' role='document'>"+
                            "<div class='modal-content'>"+
                                "<div class='modal-header'>"+
                                    "<h5 class='modal-title'>Editar marca "+nome+"</h5>"+
                                    "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>"+
                                    "<span aria-hidden='true'>&times;</span>"+
                                    "</button>"+
                                "</div>"+
                                "<form method = 'POST' action = '/beer-ecommerce/dash/marca/atualizar'>"+
                                    "<div class='modal-body'>"+
                                        "<label>Nome da marca</label>"+
                                        "<input name = 'nome_marca' value = '"+nome+"' class = 'form-control'>"+
                                        "<input type = 'hidden' name = 'id_marca' value = '"+id+"'>"+
                                    "</div>"+
                                    "<div class='modal-footer'>"+
                                    
                                        "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar janela</button>"+
                                        "<a class='btn btn-danger' href = '/beer-ecommerce/dash/marca/apagar/"+id+"'"+">Apagar marca</a>"+
                                        "<button type='submit' class='btn btn-primary'>Atualizar</button>"
                                    "</div>"+
                                "</form>"+
                            "</div>"+
                        "</div>"+
                    "</div>"

        /* adicionando modal ao body e abrindo-o */ 
        $("body").append(modal);
        $("#"+nome_id+id).modal("show");

    })

    /* Função para abrir o modal da página de status dinâmicamente */
    $(".editar-status").click(function(){
        
        /* pegando id e nome da marca */
        var id = $(this).attr("id-status");
        var nome = $(this).attr("nome-status").replace(/_/g, " ");
        var nome_id = $(this).attr("nome-status");
        

        var modal = "<div id = "+nome_id+id+" class= 'modal fade' tabindex='-1' role='dialog' data-backdrop = 'static'>"+
                        "<div class='modal-dialog' role='document'>"+
                            "<div class='modal-content'>"+
                                "<div class='modal-header'>"+
                                    "<h5 class='modal-title'>Editar Status "+nome+"</h5>"+
                                    "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>"+
                                    "<span aria-hidden='true'>&times;</span>"+
                                    "</button>"+
                                "</div>"+
                                "<form method = 'POST' action = '/beer-ecommerce/dash/configuracoes/gravarStatus'>"+
                                    "<div class='modal-body'>"+
                                        "<label>Descrição do Status</label>"+
                                        "<input name = 'descricao_status' value = '"+nome+"' class = 'form-control'>"+
                                        "<input type = 'hidden' name = 'id_status' value = '"+id+"'>"+
                                        "<input type = 'hidden' name = 'tipo' value = 'atualizar'>"+
                                    "</div>"+
                                    "<div class='modal-footer'>"+
                                    
                                        "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar janela</button>"+
                                        "<a class='btn btn-danger' href = '/beer-ecommerce/dash/configuracoes/apagarStatus/"+id+"'"+">Apagar status</a>"+
                                        "<button type='submit' class='btn btn-primary'>Atualizar</button>"
                                    "</div>"+
                                "</form>"+
                            "</div>"+
                        "</div>"+
                    "</div>"

        /* adicionando modal ao body e abrindo-o */ 
        $("body").append(modal);
        $("#"+nome_id+id).modal("show");

    })

    /* Função para controlar o click do botão de toggle do status de uma bebida */
    $(".toggle-status-bebida").change(function(){

        /* recebendo os dados */
        const id = $(this).attr("id-bebida");
        const status = $(this).attr("status");     
        /* Chamando função a partir do AJAX */
        $.ajax({
            url: '/beer-ecommerce/dash/bebida/attStatus/',
            method: 'post',
            data: { id, status }
        })
    })

    /* Função para controlar o click do botão de toggle do status de uma promoção */
    $(".toggle-status-promocao").change(function(){

        /* recebendo os dados */
        const id = $(this).attr("id-promocao");
        const status = $(this).attr("status");
        
        /* Chamando função a partir do AJAX */
        $.ajax({
            url: '/beer-ecommerce/dash/promocao/attStatus/',
            method: 'post',
            data: { id, status }
        })
    })

    /* função para controlar o auto-complete de endereço */
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#uf").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                    }
                })
            }
        }
    })

    /* chamando função para deslogar do sistema */
    $("#deslogar").click(function(){window.location = "/beer-ecommerce/dash/auth/deslogar"})
    
    
    /* Funções para adicinar spinner após o clique */
    $("#form-add-bebida").submit(function(){
        $("#btn-add-bebida").remove();
        $("#div-add-bebida").append("<i class='fas fa-spinner fa-pulse custom-spinner-green'></i>");
    })

    $("#form-editar-bebida").submit(function(){
        $("#btn-editar-bebida").remove();
        $("#div-editar-bebida").append("<i class='fas fa-spinner fa-pulse custom-spinner-green'></i>");
    })

    $("#form-add-estoque").submit(function(){
        $("#btn-add-estoque").remove();
        $("#div-add-estoque").append("<i class='fas fa-spinner fa-pulse custom-spinner-green'></i>");
    })

    $("#form-remover-estoque").submit(function(){
        $("#btn-remover-estoque").remove();
        $("#div-remover-estoque").append("<i class='fas fa-spinner fa-pulse custom-spinner-red'></i>");
    })

    $("#form-add-marca").submit(function(){
        $("#btn-add-marca").remove();
        $("#div-add-marca").append("<i class='fas fa-spinner fa-pulse custom-spinner-green'></i>");
    })

    $("#form-add-categoria").submit(function(){
        $("#btn-add-categoria").remove();
        $("#div-add-categoria").append("<i class='fas fa-spinner fa-pulse custom-spinner-green'></i>");
    })

    $("#form-add-fornecedor").submit(function(){
        $("#btn-add-fornecedor").remove();
        $("#div-add-fornecedor").append("<i class='fas fa-spinner fa-pulse custom-spinner-green'></i>");
    })

    $("#form-att-fornecedor").submit(function(){
        $("#btn-att-fornecedor").remove();
        $("#div-att-fornecedor").append("<i class='fas fa-spinner fa-pulse custom-spinner-green'></i>");
    })

    $("#form-add-promocao").submit(function(){
        $("#btn-add-promocao").remove();
        $("#div-add-promocao").append("<i class='fas fa-spinner fa-pulse custom-spinner-green'></i>");
    })

    $("#form-att-promocao").submit(function(){
        $("#btn-att-promocao").remove();
        $("#div-att-promocao").append("<i class='fas fa-spinner fa-pulse custom-spinner-green'></i>");
    })

    $("#form-add-status").submit(function(){
        $("#btn-add-status").remove();
        $("#div-add-status").append("<i class='fas fa-spinner fa-pulse custom-spinner-green'></i>");
    })
    
}); 
