<?= $this->session->flashdata('gravar_dados_estoque');?>

<h1 class = "title">Estoque <?=$bebida['nome_bebida']?> </h1>

<div class = "row margin-top">
    <div class = "col-md-2">
        <a href = "/beer-ecommerce/dash/bebida/editar/<?=$bebida['id_bebida']?>"><button class = "btn btn-voltar"><i class = " icon-espaco fa fa-chevron-circle-left"></i>Voltar</button></a>
    </div>

    <div class = "col-md-2">
        <button id = "btn-collapse-add" class = "btn btn-auxiliar"><i class = "fa fa-plus icon-espaco"></i>Adicionar ao estoque</button>
    </div>

    <div class = "col-md-1"></div>

    <div class = "col-md-2">
        <button id = "btn-collapse-remove" class = "btn btn-voltar"><i class = "fa fa-trash icon-espaco"></i>Remover do estoque</button>
    </div>

    <div class = "col-md-1"></div>

    <div class = "col-md-4">
        <h3><?= $bebida['qtd_estoque']?> em estoque</h3>
    </div>
</div>

<div class = "collapse margin-top" id = "collapse-add">
    <form method = "POST" action = "/beer-ecommerce/dash/estoque/gravar" id = 'form-add-estoque'>
        <input type = "hidden" name = 'tipo' value = "estoque-add">
        <input type = "hidden" name = 'id_bebida' value = "<?=$bebida['id_bebida']?>">
        <input type = "hidden" name = 'qtd_estoque' value = "<?=$bebida['qtd_estoque']?>">

        <div class = "form-group div-add-estoque">

            <div class = "row">
                <div class = "col-md-4">
                    <label>Quantidade para adicionar</label>
                    <input class = "form-control" name = "quantidade-add-estoque" type = "number" required>
                </div>

                <div class = "col-md-4">
                    <label>Valor de compra por unidade</label>
                    <input step="0.01" class = "form-control" name = "valor_compra_unidade" type = "number" required>
                </div>

                <div class = "col-md-4">

                    <label>Fornecedor</label>
                    <select class = "form-control" name = "fornecedor" required>

                        <?php foreach($fornecedores as $fornecedor){ ?>
                            <option value = "<?= $fornecedor['id_fornecedor']?>"><?=$fornecedor['nome_fornecedor']?></option>
                        <?php } ?>

                    </select>
                </div>
            </div>
            <div class = "center margin-top" id = "div-add-estoque">
                <button id = 'btn-add-estoque' type = 'submit' class = "btn btn-auxiliar">Adicionar</button>
            </div>
        </div>
    </form>
</div>

<div class = "collapse margin-top" id = "collapse-remove">
    <form method = "POST" action = "/beer-ecommerce/dash/estoque/gravar" id = 'form-remover-estoque'>
        <input type = "hidden" name = 'tipo' value = "estoque-remove">
        <input type = "hidden" name = 'id_bebida' value = "<?=$bebida['id_bebida']?>">
        <input type = "hidden" name = 'qtd_estoque' value = "<?=$bebida['qtd_estoque']?>">

        <div class = "form-group div-add-estoque">
    
            <div class = "row">
                <div class = "col-md-4">
                    <label>Quantidade que deseja remover</label>
                    <input class = "form-control" name = "quantidade-remove" type = "number" required>
                </div>

                <div class = "col-md-4">
                    <label>Lote para remover</label>
                    <select class = "form-control" name = "lote" required>
                            
                        <?php foreach($estoque as $lote){ ?>
                            <option value = "<?= $lote['id_lote']?>">#<?= $lote['id_lote']?></option>
                        <?php } ?>

                    </select>
                </div>
            </div>
            <div class = "center margin-top" id = 'div-remover-estoque'>
                <button id = 'btn-remover-estoque' type = 'submit' class = "btn btn-voltar">Remover</button>
            </div>
        </div>
    </form>
</div>


<div class = "estoque margin-top">
    <table class="table table-bordered" id = "">
        <thead>

            <tr class = "tr-estilo">
                <th class="text-center">ID Lote</th>
                <th class = "text-center">Data entrada</th>
                <th class="text-center">Última saída</th>
                <th class="text-center">Valor de compra (unidade)</th>
                <th class="text-center">Fornecedor</th>
                <th class="text-center">Quantidade comprada</th>
                <th class="text-center">Quantidade atual</th>
                <th class="text-center">Valor final da compra</th>
            </tr>

        </thead>
        <tbody>

        <?php foreach($estoque as $lote){ ?>
            <tr>
                <td class = "text-center">#<?=$lote['id_lote']?></td>
                <td class = "text-center"><?=formataData($lote['entrada'])?></td>
                <td class = "text-center"><?=formataData($lote['ultima_saida'])?></td>
                <td class = "text-center">R$ <?=$lote['valor_compra_unidade']?></td>
                <td class = "text-center"><?=$lote['nome_fornecedor']?></td>
                <td class = "text-center"><?=$lote['quantidade']?></td>
                <td class = "text-center"><?=$lote['atual']?></td>
                <td class = "text-center">R$ <?= $lote['quantidade'] * $lote['valor_compra_unidade']?></td>

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