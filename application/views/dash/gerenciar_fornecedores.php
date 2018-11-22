<?= $this->session->flashdata('gravar_dados_fornecedores');?>
<div>
   <a href = "/beer-ecommerce/dash/fornecedor/add"><button class = "btn btn-adicionar"><i class = " icon-espaco fa fa-plus"></i>Adicionar novo fornecedor</button></a>
</div>

<div class = "margin-top">
    <p class = "title">Filtre o que deseja ver</p>
    <div class = "row">
        <div class = "col-md-8"><input id = "filtro-fornecedor" class = "form-control" placeholder = "Pesquise o nome ou ID do fornecedor"></div>
    </div>
</div>

<div class = "bebidas margin-top">

    <table class="table table-bordered" id = "tabela-fornecedores">
            
        <thead>
            <tr class = "tr-estilo">
                <th class="text-center">ID</th>
                <th class="text-center">Nome do fornecedor</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($fornecedores as $fornecedor){ ?>
                <tr>
                    <td class = 'text-center'>#<?=$fornecedor['id_fornecedor']?></td>
                    <td class = 'text-center'><?=$fornecedor['nome_fornecedor']?></td>
                    <td class = 'text-center'>
                        <a href = '/beer-ecommerce/dash/fornecedor/editar/<?=$fornecedor['id_fornecedor']?>'><button class = 'btn btn-sm btn-info'><i class = 'fa fa-edit'></i></button></a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>

</div>

</div>

</div>
</div>
</body>

</html>