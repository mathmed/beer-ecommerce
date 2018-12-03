<?= $this->session->flashdata('gravar_dados_status');?>

<div class = "margin-top margin-bottom">
    <button data-toggle = "collapse" data-target = "#status" class = "btn btn-auxiliar"><i class = "fa fa-cogs icon-espaco"></i>Gerenciar Status de Pedidos</button>
</div>


<div class = "collapse" id = "status">

    <button data-toggle = "collapse" data-target = "#novo-status" class = "btn btn-filtrar"><i class = "fa fa-plus icon-espaco"></i>Adicionar Status</button>

    <div class = "margin-top margin-bottom collapse" id = "novo-status">

        <form id = "form-add-status" method = "POST" action = "/beer-ecommerce/dash/configuracoes/gravarStatus" >
            <div class = "row">
                <div class = "col-md-8">
                    <input required name = "descricao_status" class = "form-control" placeholder = "Descrição do status, ex: Em andamento">
                </div>
                <div class = "col-md-4" id = "div-add-status">
                    <button id = "btn-add-status" type = "submit" class = "btn btn-adicionar">Gravar</button>
                </div>
            </div>
        </form>

    </div>

    <table class="table table-bordered margin-top" id = "tabela-categorias">
        <thead>
            <tr class = "tr-estilo">
                <th class="text-center">ID do status</th>
                <th class = "text-center">Descrição</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($status as $atual){ ?>
            <tr>
                <td class = "text-center">#<?=$atual['id_status']?></td>
                <td class = "text-center"><?=$atual['descricao_status']?></td>

                <td class = "text-center">
                    <button nome-status ="<?= str_replace(" ", "_", $atual['descricao_status']) ?>" id-status ="<?=$atual['id_status']?>" class = "btn btn-sm btn-info editar-status"><i class = "fa fa-edit"></i></button>
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