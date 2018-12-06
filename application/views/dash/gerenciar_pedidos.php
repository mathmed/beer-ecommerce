<?= $this->session->flashdata('gravar_dados_pedidos');?>

<!-- <?= '<pre>' ?>
<?= print_r($pedidos) ?>
<?= '</pre>' ?> -->

<div class = "">
    <p class = "title">Filtre o que deseja ver</p>
    <div class = "row">
        <div class = "col-md-3">
            <label class = "label">Pedidos de:</label>
            <input type = "date" class = "form-control">
        </div>
        <div class = "col-md-3">
            <label class = "label">Pedidos até:</label>
            <input type = "date" class = "form-control">
        </div>
    </div>
    <div class = 'margin-top'><a href = ""><button class = "btn btn-filtrar"><i class = " icon-espaco fa fa-filter"></i>Filtrar</button></a></div>
</div>

<div class = "pedidos margin-top">

    <table class="table table-bordered" id = "tabela-pedidos">
            
        <thead>
            <tr class = "tr-estilo">
                <th class="text-center">ID</th>
                <th class="text-center">Valor Total</th>
                <th class="text-center">Data Pedido</th>
                <th class="text-center">Ultima Atualização</th>
                <th class="text-center">Status</th>
                <th class="text-center">Gerenciar</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($pedidos as $pedido){ ?>

            <tr>
                    <td class="text-center">#<?= $pedido['id_pedido'] ?></td>
                    <td class="text-center">R$ <?=$pedido['valor_total'] ?></td>
                    <td class="text-center"><?= formataDataHora($pedido['data_pedido'])?></td>
                    <td class="text-center"><?= formataDataHora($pedido['data_att_status'])?></td>
                    <td class="text-center"><?= $pedido['descricao_status'] ?></td>

                    <td class="text-center">
                        <a href = '/beer-ecommerce/dash/pedido/editar/3'><button class = 'btn btn-sm btn-info'><i class = 'fa fa-edit'></i></button></a>
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