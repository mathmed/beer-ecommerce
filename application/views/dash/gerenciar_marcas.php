<?= $this->session->flashdata('gravar_dados_bebidas');?>

<div>
   <button data-toggle = "collapse" data-target = "#add-marca" class = "btn btn-adicionar"><i class = " icon-espaco fa fa-plus"></i>Adicionar nova marca</button>
</div>

<div class = "collapse margin-top margin-bottom" id = "add-marca">
    <form method = 'POST' action = '/beer-ecommerce/dash/marca/gravar' id = 'form-add-marca'>
        <div class = "row add-marca-div">
            <div class = "col-md-5">
                <input name = 'nome_marca' type = "text" placeholder = "Informe o nome da marca" class = "form-control">
                <input type = 'hidden' name = 'tipo' value = 'marca'>
            </div>

            <div class = "col-md-5" id = 'div-add-marca'>
                <button id = 'btn-add-marca' type = "submit" class = "btn btn-adicionar"><i class = "icon-espaco fa fa-plus"></i>Gravar</button>
            </div>
        </div>
    </form>
</div>


<div class = "margin-top">
    <p class = "title">Filtre o que deseja ver</p>
    <div class = "row">
        <div class = "col-md-8"><input id = "filtro-marca" class = "form-control" placeholder = "Pesquise o nome ou ID da marca"></div>
    </div>
</div>

<div class = "bebidas margin-top">

    <table class="table table-bordered" id = "tabela-marcas">
            
        <thead>
            <tr class = "tr-estilo">
                <th class="text-center">ID</th>
                <th class="text-center">Nome da marca</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($dados as $dado){ ?>
            <tr>
                <td class = "text-center">#<?=$dado['id_marca']?></td>
                <td class = "text-center"><?=$dado['nome_marca']?></td>

                <td class = "text-center">
                    <button nome-marca ="<?= str_replace(" ", "_", $dado['nome_marca']) ?>" id-marca ="<?=$dado['id_marca']?>" class = "btn btn-sm btn-info editar-marca"><i class = "fa fa-edit"></i></button>
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