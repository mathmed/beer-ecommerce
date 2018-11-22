<?= $this->session->flashdata('gravar_dados_pedidos');?>

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

           <tr>
                <td class="text-center">#1</td>
                <td class="text-center">R$ 85,50</td>
                <td class="text-center">10/11/2018</td>
                <td class="text-center">19/11/2018 às 10:23</td>
                <td class="text-center">Saiu para entrega</td>

                <td class="text-center">
                    <a href = '/beer-ecommerce/dash/pedido/editar/3'><button class = 'btn btn-sm btn-info'><i class = 'fa fa-edit'></i></button></a>
                </td>
           </tr>

           <tr>
                <td class="text-center">#2</td>
                <td class="text-center">R$ 870,00</td>
                <td class="text-center">20/11/2018</td>
                <td class="text-center">20/11/2018 às 15:10</td>
                <td class="text-center">Pagamento em análise</td>

                <td class="text-center">
                    <a href = '/beer-ecommerce/dash/pedido/editar/2'><button class = 'btn btn-sm btn-info'><i class = 'fa fa-edit'></i></button></a>
                </td>

           </tr>

        </tbody>
    </table>

</div>


</div>

</div>
</div>
</body>

</html>